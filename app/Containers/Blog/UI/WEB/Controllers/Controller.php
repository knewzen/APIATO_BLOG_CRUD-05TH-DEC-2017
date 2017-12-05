<?php

namespace App\Containers\Blog\UI\WEB\Controllers;

use App\Containers\Blog\UI\WEB\Requests\CreateBlogRequest;
use App\Containers\Blog\UI\WEB\Requests\DeleteBlogRequest;
use App\Containers\Blog\UI\WEB\Requests\GetAllBlogsRequest;
use App\Containers\Blog\UI\WEB\Requests\FindBlogByIdRequest;
use App\Containers\Blog\UI\WEB\Requests\UpdateBlogRequest;
use App\Containers\Blog\UI\WEB\Requests\StoreBlogRequest;
use App\Containers\Blog\UI\WEB\Requests\EditBlogRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Blog\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllBlogsRequest $request
     */
    public function index(GetAllBlogsRequest $request)
    {
        $blogs = Apiato::call('Blog@GetAllBlogsAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindBlogByIdRequest $request
     */
    public function show(FindBlogByIdRequest $request)
    {
        $blog = Apiato::call('Blog@FindBlogByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateBlogRequest $request
     */
    public function create(CreateBlogRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreBlogRequest $request
     */
    public function store(StoreBlogRequest $request)
    {
        $blog = Apiato::call('Blog@CreateBlogAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditBlogRequest $request
     */
    public function edit(EditBlogRequest $request)
    {
        $blog = Apiato::call('Blog@GetBlogByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateBlogRequest $request
     */
    public function update(UpdateBlogRequest $request)
    {
        $blog = Apiato::call('Blog@UpdateBlogAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteBlogRequest $request
     */
    public function delete(DeleteBlogRequest $request)
    {
         $result = Apiato::call('Blog@DeleteBlogAction', [$request]);

         // ..
    }
}
