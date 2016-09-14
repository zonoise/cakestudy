<?php
namespace App\Shell;

use Cake\Console\Shell;
use \App\Model\Table\SubmissionsTable ;
use Cake\Filesystem\File;
use Cake\ORM\TableRegistry;

/**
 * SubmissionInsert shell command.
 */
class SubmissionInsertShell extends Shell
{

    /**
     * Manage the available sub-commands along with their arguments and help
     *
     * @see http://book.cakephp.org/3.0/en/console-and-shells.html#configuring-options-and-generating-help
     *
     * @return \Cake\Console\ConsoleOptionParser
     */
    public function getOptionParser()
    {
        $parser = parent::getOptionParser();
        $parser->addArgument('filename', ['help' => 'CSV file path','required'=>true]);
        return $parser;
    }

    /**
     * main() method.
     *
     * @return bool|int Success or error code.
     */
    public function main() 
    {
        $filename = $this->args[0];
        $this->insert($filename);
        
        $this->out($this->OptionParser->help());
    }
    
    private function insert($filename){
        $handle = fopen($filename, "r");
        if($handle === FALSE){
            echo "File Not Found".__METHOD__;
            return;
        }
        $SubmissionsTable = TableRegistry::get('Submissions');

        //property_to_csv_column mapping
        $mapping = ['contest_id' =>0,
         'created' =>1,
         'task_id' =>2,
         'user_name' =>3, 
         'language' =>4,
         'score' =>5,
        //  'source_code_size' =>6
        //  'status' =>7
        //  'exec_time' =>8
        //  'memory_usage' =>9
          'url' =>10
        ];
         
        
        while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
            $submission = $SubmissionsTable->newEntity();

            foreach($mapping as $property => $index){
                $submission->{$property} = $data[$index];
            }
            $SubmissionsTable->save($submission);
        }
        fclose($handle);
    }
}
