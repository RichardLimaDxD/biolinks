<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;

class LinkController extends Controller
{
    public function create()
    {
        return view('links.create');
    }

    public function store(StoreLinkRequest $request)
    {
        $user = auth()->user();

        $user->Links()->create($request->validated());

        return to_route('dashboard');
    }

    public function edit(Link $link)
    {
        $this->authorize('permission', $link);

        return view('links.edit', compact('link'));
    }

    public function update(UpdateLinkRequest $request, Link $link)
    {
        $this->authorize('permission', $link);

        $link->fill($request->validated())->save();

        return to_route('dashboard')
            ->with('message', 'Link updated successfully');
    }

    public function destroy(Link $link)
    {
        $this->authorize('permission', $link);

        $link->delete();

        return to_route('dashboard')->with('message', 'Deleted with success');
    }

    public function up(Link $link)
    {
        $this->authorize('permission', $link);

        $link->moveUp();

        return back();
    }

    public function down(Link $link)
    {
        $this->authorize('permission', $link);

        $link->moveDown();

        return back();
    }
}
