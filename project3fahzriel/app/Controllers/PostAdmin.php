<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PostModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class PostAdmin extends BaseController
{
    public function index()
    {
        $post = new PostModel();
        $data['posts'] = $post->findAll();
        echo view('admin/admin_post_list', $data);
    }

    //--------------------------------------------------------------

    public function preview(int $id)
    {
        $post = new PostModel();
        $data['post'] = $post->where('id', $id)->first();

        if(!$data['post']){
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('post_detail', $data);
    }

    //--------------------------------------------------------------

    public function create()
    {
        $validation = \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            $post = new PostModel();
            $post->insert([
                "title"   => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status"  => $this->request->getPost('status'),
                "slug"    => url_title($this->request->getPost('title'), '-', TRUE)
            ]);
            // Flash Message ditambahin di sini
            return redirect()->to('admin/post')->with('success', 'Post berhasil dibuat!');
        }

        echo view('admin/admin_post_create');
    }

    //--------------------------------------------------------------

    public function edit(int $id)
    {
        $post = new PostModel();
        $data['post'] = $post->where('id', $id)->first();

        $validation = \Config\Services::validation();
        $validation->setRules([
            'id'    => 'required',
            'title' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid){
            $post->update($id, [
                "title"   => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status"  => $this->request->getPost('status')
            ]);
            // Flash Message ditambahin di sini
            return redirect()->to('admin/post')->with('success', 'Post berhasil diperbarui!');
        }

        echo view('admin/admin_post_update', $data);
    }

    //--------------------------------------------------------------

    public function delete(int $id)
    {
        $post = new PostModel();
        $post->delete($id);
        // Flash Message ditambahin di sini
        return redirect()->to('admin/post')->with('success', 'Post berhasil dihapus!');
    }
}