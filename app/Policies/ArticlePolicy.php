<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Article;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;

    const UPDATE = 'update';
    const DELETE = 'delete';
    const APPROVE = 'approve';
    const DISAPPROVE = 'disapprove';
    const DECLINE = 'decline';
    const PINNED = 'togglePinnedStatus';

    public function update(User $user, Article $article): bool
    {
        return ($article->isAuthoredBy($user) && $article->isNotPublished()) ||
            $user->isModerator() ||
            $user->isAdmin();
    }

    public function delete(User $user, Article $article): bool
    {
        return $article->isAuthoredBy($user) || $user->isModerator() || $user->isAdmin();
    }

    public function approve(User $user, Article $article): bool
    {
        return $user->isModerator() || $user->isAdmin();
    }

    public function disapprove(User $user, Article $article): bool
    {
        return $user->isModerator() || $user->isAdmin();
    }

    public function decline(User $user, Article $article): bool
    {
        return $user->isModerator() || $user->isAdmin();
    }

    public function togglePinnedStatus(User $user, Article $article): bool
    {
        return $user->isModerator() || $user->isAdmin();
    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
