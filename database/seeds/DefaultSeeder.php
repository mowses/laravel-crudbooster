
<?php
use Illuminate\Database\Seeder;
class DefaultSeeder extends Seeder
{
    public function run()
    {
        $this->command->info('Please wait updating the data...');                
        $this->call('DefaultData');        
        $this->command->info('Updating the data completed !');
    }
}
class DefaultData extends Seeder {
    public function run() {        
    	
    }
}
	