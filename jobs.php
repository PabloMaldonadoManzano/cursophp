<?php

require_once 'vendor/autoload.php';

use App\Models\Job;
use App\Models\Printable;
use App\Models\Project;

$job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Developer', 'This is an awesome job!!!');
$job2->months = 24;

$job3 = new Job('Devops', 'This is an awesome job!!!');
$job3->months = 32;

$project1 = new Project('Proyecto1', 'este e sun proyecto' );

//$projectLib = new ProjectLib();

$jobs = [
    $job1,
    $job2,
    $job3
  ];

  $projects = [
    $project1
  ];
  
  function printelement(Printable $job) {
    if($job->visible == false) {
      return;
    }
  
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->getDescription() . '</p>';
    echo '<p>' . $job->getDurationAsString() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }