<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\DownloadByURL;

class DownloadFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'download:url {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download file from url';

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
        $url = $this->argument('url');
        dispatch(new DownloadByURL($url));
        $this->comment('File downloaded');
    }
}
