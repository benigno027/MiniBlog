<?php

namespace App\Console\Commands;

use App\User;
use App\Category;
use App\Publication;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

class PostAnotherBlog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:publications';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get data another blog';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client();
        $res = $client->request('GET', 'https://sq1-api-test.herokuapp.com/posts');

        if( $res->getStatusCode() == "200"){
            
            $publications = json_decode( $res->getBody()->getContents() );
            $user = User::where('email', 'admin.api@miniblog.com')->first();
            $category = Category::where('name', 'Articles')->first();
            

            foreach ($publications->data as $publication) {
                
                $new_publication = new Publication();
                $new_publication->user_id = $user->id;
                $new_publication->title = $publication->title;
                $new_publication->category_id = $category->id;
                $new_publication->description = $publication->description;
                $new_publication->created_at = $publication->publication_date;
                $new_publication->save();

            }

        }
    }
}
