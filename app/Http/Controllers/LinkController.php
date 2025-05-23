<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;

class LinkController extends Controller
{
    public function create(StoreLinkRequest $request)
    {
        return view('links.create');
    }

    public function store(StoreLinkRequest $request)
    {
        Link::query()->create(
            $request->validated()
        );

        return to_route('dashboard');
    }

    public function show(Link $link)
    {
        
    }

    public function edit(Link $link)
    {
        //
    }

    public function update(UpdateLinkRequest $request, Link $link)
    {
        //
    }

    public function destroy(Link $link)
    {
        //
    }
}
