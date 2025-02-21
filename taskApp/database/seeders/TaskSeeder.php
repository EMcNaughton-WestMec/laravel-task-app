<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
class TaskSeeder extends Seeder
{
/**
* Run the database seeds.
*/
public function run(): void
{
Task::create([

'task_name' => 'Take out trash',
'task_location' => 'Kitchen',
'time_complexity' => 1, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Trash bags',
'deadline' => '2025-02-20 10:00:00',
'priority' => 2, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);
// add another Task::create([]); array for each item to seed
Task::create([

'task_name' => 'Do Homework',
'task_location' => 'Bedroom',
'time_complexity' => 3, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Notebook, pencil, eraser',
'deadline' => '2025-02-20 23:45:00',
'priority' => 3, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);
Task::create([

'task_name' => 'Cook Dinner',
'task_location' => 'Kitchen',
'time_complexity' => 2, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Pan, Meat, Noodles, Water',
'deadline' => '2025-02-20 19:30:00',
'priority' => 2, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);
Task::create([

'task_name' => 'Walk Dog',
'task_location' => 'Neighborhood',
'time_complexity' => 2, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Leash, Dog',
'deadline' => '2025-02-20 18:00:00',
'priority' => 2, // (1 => low, 2 => medium, 3 => high)
'category' => 'chores'
]);
Task::create([

'task_name' => 'Finish Documents',
'task_location' => 'Office',
'time_complexity' => 5, // (1 => ~10 min, 2 => ~30 min, etc.)
'materials_required'=> 'Laptop',
'deadline' => '2025-02-22 22:30:00',
'priority' => 3, // (1 => low, 2 => medium, 3 => high)
'category' => 'Work'
]);
}
}