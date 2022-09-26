<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function add()
    {
        return view('addLink');
    }
    public function saveLink(Request $request)
    {
        $response = Http::withToken($request->token)
            ->get(
                $request->link . '/wp-json/wp/v2/categories?mo_rest_api_test_config=jwt_auth&per_page=100'
            );
        $token = $request->token;
        $link = $request->link;
        $response = json_decode($response);

        return view('add', compact('response', 'token', 'link'));
    }

    public function saveAdd(Request $request)
    {
        // dd($request->all());
        $title = $request->title - 1;
        $content = $request->content - 1;
        $data = Excel::toArray([], $request->file('file'));

        // dd($data);

        foreach ($data as $item) {

            foreach ($item as $index => $ite) {
                if ($index >= 1) {
                    $response = Http::withToken($request->token)
                        ->post(
                            $request->link . '/wp-json/wp/v2/posts?mo_rest_api_test_config=jwt_auth',
                            [

                                'title' =>  $item[$index][$title],
                                'content' => $item[$index][$content],
                                // 'categories' => 1,
                                'categories'=>$request->category,

                            ]
                        );
                }
            }
        }
        return redirect()->route('addLink')->with('msg', 'Thêm Thành Công');
    }
}
