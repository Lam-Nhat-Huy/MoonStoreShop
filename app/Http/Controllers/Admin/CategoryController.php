<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.category.list', compact('categories'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword) {
            $categories = Category::where('name', 'like', "%$keyword%")->orderBy('created_at', 'desc')->paginate(10);
            return view('admin.category.list', compact('categories'));
        } else {
            return redirect()->route('category.index');
        }
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.category.add', compact('categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        try {
            Category::create($request->all());
            return redirect()->route('category.index')->with('success', 'Thêm mới danh mục thành công');
        } catch (\Exception $e) {
            if ($e instanceof \Illuminate\Database\QueryException) {
                return redirect()->back()->with('error', 'Thêm mới thất bại. Lỗi cơ sở dữ liệu.');
            }

            return redirect()->back()->with('error', 'Thêm mới thất bại');
        }
    }

    public function show(string $id)
    {
    }

    public function edit(Category $category)
    {
        $categories = $category->all();
        return view('admin.category.edit', compact('category', 'categories'));
    }

    public function update(Request $request, Category $category)
    {
        try {
            $category->update($request->all());
            if ($request->has('status') && $request->input('status') == 1) {
                $childCategories = Category::where('parent_id', $category->id)->get();
                foreach ($childCategories as $childCategory) {
                    $childCategory->update(['status' => 1]);
                }
            } else if ($request->has('status') && $request->input('status') == 0) {
                $childCategories = Category::where('parent_id', $category->id)->get();
                foreach ($childCategories as $childCategory) {
                    $childCategory->update(['status' => 0]);
                }
            }
            return redirect()->route('category.index')->with('success', 'Chỉnh sửa danh mục thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Chỉnh sửa thất bại');
        }
    }

    public function destroy(Category $category)
    {
        try {
            $childCategories = Category::where('parent_id', $category->id)->get();

            foreach ($childCategories as $childCategory) {
                $childCategory->delete();
            }

            $category->delete();

            return redirect()->route('category.index')->with('success', 'Xóa danh mục sản phẩm và tất cả danh mục con thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Xóa thất bại');
        }
    }


    public function trash()
    {
        $categories = Category::onlyTrashed()->paginate(10);
        return view('admin.category.trash', compact('categories'));
    }

    public function restore($id)
    {
        try {
            // Lấy danh sách các danh mục con của danh mục cha
            $childCategories = Category::withTrashed()->where('parent_id', $id)->get();

            // Phục hồi từng danh mục con
            foreach ($childCategories as $childCategory) {
                $childCategory->restore();
            }

            // Phục hồi danh mục cha
            Category::withTrashed()->where('id', $id)->restore();

            return redirect()->route('category.index')->with('success', 'Phục hồi danh mục và tất cả danh mục con thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Phục hồi thất bại');
        }
    }


    public function forceDelete($id)
    {
        try {
            Category::withTrashed()->where('id', $id)->forceDelete();
            return redirect()->route('category.trash')->with('success', 'Đã xóa danh mục vĩnh viễn thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Xóa thất bại');
        }
    }
}
