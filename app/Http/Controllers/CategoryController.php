<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Throwable;


class CategoryController extends Controller
{
    /**
     * Tra ve giao dien trang chu 
     */
    public function index()
    {
        try {
            $categories = Category::paginate(10);
            return view('admin.categories.index', compact('categories'));
        } catch (Throwable $e) {
            toastr()->timeOut(7000)->closeButton()->addError('An error occurred: ' . $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Tra ve giao dien trang tao moi 
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * ham tao xu li tao moi
     */
    public function store(CategoryRequest $request)
    {
        try {
            $validated = $request->validated();
            $category = Category::create($validated);

            if ($category) {
                toastr()->timeOut(7000)->closeButton()->addSuccess('Category Created Successfully!');
                return redirect()->back()->with('message-success', 'Success');
            }
            toastr()->timeOut(7000)->closeButton()->addError('Category Created Fail!');
            return redirect()->back();
        } catch (Throwable $e) {
            toastr()->timeOut(7000)->closeButton()->addError('An error occurred: ' . $e->getMessage());
            return redirect()->back();
        }
    }


    /**
     * hien thi categories
     */
    public function show(string $id)
    {
        try {
            $category = Category::findOrFail($id);
            return view('admin.categories.show', compact('category'));
        } catch (Throwable $e) {
            toastr()->timeOut(7000)->closeButton()->addError('An error occurred: ' . $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Tra ve giao dien trang tao cap nhat 
     */
    public function edit(string $id)
    {
        try {
            $category = Category::findOrFail($id);
            return view('admin.categories.edit', compact('category'));
        } catch (Throwable $e) {
            toastr()->timeOut(7000)->closeButton()->addError('An error occurred: ' . $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Ham xu li cap nhat
     */
    public function update(CategoryRequest $request, string $id)
    {
        try {
            $validate = $request->validated();
            $category = Category::findOrFail($id);
            $category->update($validate);
            if ($category) {
                toastr()->timeOut(7000)->closeButton()->addSuccess('Category Updated Successfully!');
                return redirect()->back()->with('message-success', 'Success');
            }
            toastr()->timeOut(7000)->closeButton()->addError('Category Updated Fail!');
            return redirect()->back();
        } catch (Throwable $e) {
            toastr()->timeOut(7000)->closeButton()->addError('An error occurred: ' . $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Ham xu li xoa
     */
    public function destroy(string $id)
    {
        try {
            $category = Category::destroy($id);
            if ($category) {
                toastr()->timeOut(7000)->closeButton()->addSuccess('Category Delete Successfully!');
                return redirect()->back();
            }
            toastr()->timeOut(7000)->closeButton()->addSuccess('Category Delete Fail!');
            return redirect()->back();
        } catch (Throwable $e) {
            toastr()->timeOut(7000)->closeButton()->addError('An error occurred: ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
