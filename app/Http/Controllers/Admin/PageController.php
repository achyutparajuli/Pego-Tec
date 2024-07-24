<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::with('user')->orderBy('id', 'DESC')->paginate(5); // have used 5 for now, and show latest one
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'slug' => 'required|unique:pages,slug',
                'content' => 'required',
            ]);

            if ($validator->fails())
            {
                toastr()->warning('Please check your form and try again!');
                return redirect()->back()
                    ->withInput($request->input())
                    ->withErrors($validator->errors());
            }

            $newPage = new Page();
            $newPage->name = $request->name;
            $newPage->slug = $request->slug;
            $newPage->content = $request->content;
            $newPage->user_id = Auth::User()->id;
            $newPage->display_on_menu = ($request->display_on_menu == 'on') ? 1 : 0;

            if ($request->hasFile('banner'))
            {
                $image = $request->file('banner');
                $imageName = '/images/' . time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images', $imageName);

                $newPage->banner = $imageName;
            }

            $newPage->save();

            toastr()->success('Page created Succesfully!');
            return redirect()->route('admin.pages.index');
        }
        catch (Exception $e)
        {
            toastr()->error($e->getMessage());
            return redirect()->back()->withInput($request->input())
                ->withErrors($validator->errors());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'slug' => 'required',
                'content' => 'required',
            ]);


            if ($validator->fails())
            {
                toastr()->warning('Please check your form and try again!');
                return redirect()->back()
                    ->withInput($request->input())
                    ->withErrors($validator->errors());
            }

            $updatePage = Page::where('slug', $request->slug)->firstOrFail();
            $updatePage->name = $request->name;
            $updatePage->content = $request->content;
            $updatePage->display_on_menu = ($request->display_on_menu == 'on') ? 1 : 0;
            if ($request->hasFile('banner'))
            {
                $image = $request->file('banner');
                $imageName = '/images/' . time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images', $imageName);

                $updatePage->banner = $imageName;
            }
            $updatePage->save();

            toastr()->success('Page updated Succesfully!');
            return redirect()->route('admin.pages.index');
        }
        catch (Exception $e)
        {
            toastr()->error($e->getMessage());
            return redirect()->back()->withInput($request->input())
                ->withErrors($validator->errors());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        Page::where('slug', $slug)->delete();
        toastr()->success('Page deleted Succesfully!');
        return redirect()->route('admin.pages.index');
    }
}
