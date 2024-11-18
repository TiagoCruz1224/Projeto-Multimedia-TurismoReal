<?php

namespace App\Policies;

use App\Models\Article;
use App\Models\User;

class ArticlePolicy
{
    /**
     * Create a new policy instance.
	 * 
	 * @param User $user
	 * @param Article $article
     */
	public function deleteArticle(User $user, Article $article)
	{
		// Permitir que o autor do artigo ou usuários com a função de administrador possam excluir
		return $user->id === $article->user_id || $user->isAdmin();
	}
}
