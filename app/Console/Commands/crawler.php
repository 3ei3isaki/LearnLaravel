<?php

namespace App\Console\Commands;

use App\News;
use Illuminate\Console\Command;
use Goutte;

class crawler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $newsData = json_decode(file_get_contents('http://newsapi.org/v2/top-headlines?country=us&apiKey=07944a28eebb43149a2cba578bb61281'), true);

        foreach ($newsData['articles'] as $item) {
            News::firstOrCreate([
                "title" => $item['title'],
                "cate_id" => 1,
                "description" => $item['content'],
                "info" => $item['source']['name'],
                "url" => $item['url'],
                "image_url" => $item['urlToImage'],
            ]);
        }
    }
}
