<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Models\Article;
use App\Models\ReplyAble;
use Illuminate\Foundation\Http\FormRequest;

class CreateReplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'body'              => ['required'],
            'replyable_id'      => ['required'],
            'replyable_type'    => ['required', 'in:' . Article::TABLE],
        ];

    }

    public function replyAble(): ReplyAble
    {
        return $this->findReplyAble($this->get('replyable_id'),  $this->get('replyable_type'));
    }

    private function findReplyAble(int $id, string $type): ReplyAble
    {
        switch ($type) {
            case Article::TABLE:
                return Article::find($id);
        }
        abort(404);
    }

    public function author(): User
    {
        return $this->user();
    }

    public function body(): string
    {
        return $this->get('body');
    }
}
