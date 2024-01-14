<?php

namespace Database\Seeders;

use App\Models\Muscle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Muscle::create([
            "muscleName" => "Neck",
            "otherName" => "Sternocleidomastoid",
            "description" => "The sternocleidomastoid is a neck muscle responsible for head rotation and flexion. Originating from the sternum and clavicle, it attaches to the mastoid process. Its bilateral action allows tilting and rotating the head, contributing to overall neck mobility and stability."
        ]);

        Muscle::create([
            "muscleName" => "Chest",
            "otherName" => "Pectoral",
            "description" => "The chest, or thoracic region, safeguards vital organs like the heart and lungs. Anchored by the ribcage, sternum, and thoracic vertebrae, it houses muscles like the pectoralis major and minor, crucial for upper body movements. Essential for respiration and cardiovascular function, maintaining chest strength through regular exercise is pivotal for overall health and fitness."
        ]);

        Muscle::create([
            "muscleName" => "Traps",
            "otherName" => "Trapezius",
            "description" => "The traps, or trapezius muscles, are large triangular muscles on the back and shoulders. They play a key role in shoulder movement, neck function, and spine support. Strengthening these muscles is essential for upper body strength and stability."
        ]);

        Muscle::create([
            "muscleName" => "Rhomboid",
            "otherName" => "Rhomboid Major and Minor",
            "description" => "The rhomboid muscles are located between the shoulder blades and spine, comprising the rhomboid major and minor. Responsible for retracting and stabilizing the scapula (shoulder blades), these muscles play a crucial role in maintaining proper posture and supporting various upper body movements. Exercises targeting the rhomboids are essential for promoting back strength and shoulder stability."
        ]);

        Muscle::create([
            "muscleName" => "Lats",
            "otherName" => "Latissimus Dorsi",
            "description" => "The latissimus dorsi, commonly known as lats, are the large muscles of the back. Stretching from the upper arm to the lower spine, these muscles contribute to movements like arm extension and internal rotation. The lats are vital for activities such as pulling and lifting, providing strength and stability to the upper body. Engaging in exercises that target the lats is key for developing a well-rounded and strong back."
        ]);

        Muscle::create([
            "muscleName" => "Shoulder",
            "otherName" => "Deltoits",
            "description" => "Deltoids, or delts, are the shoulder muscles responsible for shoulder shape and movement. Comprising front, side, and rear parts, they are crucial for upper body strength. Targeted exercises help build shoulder definition and functional strength."
        ]);

        Muscle::create([
            "muscleName" => "Tricep",
            "otherName" => "Triceps Brachii",
            "description" => "The triceps, or triceps brachii, are the muscles located on the back of the upper arm. Consisting of three heads, these muscles play a key role in arm extension and provide stability to the elbow joint. Engaging in exercises such as tricep dips or push-ups is crucial for building strength and toning the arms."
        ]);

        Muscle::create([
            "muscleName" => "Bicep",
            "otherName" => "Biceps Brachii",
            "description" => "The biceps, or biceps brachii, are the muscles on the front of the upper arm. Comprising two heads – short and long - the biceps are responsible for flexing the elbow and rotating the forearm. Strengthening exercises, such as bicep curls, contribute to building arm strength and definition."
        ]);

        Muscle::create([
            "muscleName" => "Forearm",
            "otherName" => "Antebrachium",
            "description" => "The forearm is the region between the elbow and the wrist, consisting of two bones, the radius and ulna. It is home to a network of muscles responsible for various movements, including wrist flexion and extension, as well as finger movements. These muscles also play a crucial role in grip strength and fine motor skills. Strengthening exercises, such as forearm curls and wrist flexor/extension exercises, can enhance forearm strength and flexibility."
        ]);

        Muscle::create([
            "muscleName" => "Abdominals",
            "otherName" => "Rectus Abdominis",
            "description" => "The abdominal muscles, commonly known as abs, refer to the muscles in the anterior (front) abdominal wall. Key muscles in this area include the rectus abdominis, which forms the six-pack appearance, and the external and internal obliques. The abs play a crucial role in trunk flexion, rotation, and stabilization. Core exercises, such as crunches or planks, are commonly performed to strengthen and tone the abdominal muscles."
        ]);

        Muscle::create([
            "muscleName" => "Quads",
            "otherName" => "Quadriceps",
            "description" => "Quads is a colloquial term for the quadriceps femoris, a group of four muscles located at the front of the thigh. Comprising the rectus femoris, vastus lateralis, vastus medialis, and vastus intermedius, the quads are essential for knee extension and leg strength. Engaging in exercises like squats and leg presses helps target and strengthen the quadriceps muscles."
        ]);

        Muscle::create([
            "muscleName" => "Hamstring",
            "otherName" => "The Hams",
            "description" => "The hamstrings, or hamstring muscles, refer to a group of three muscles located at the back of the thigh: the biceps femoris, semitendinosus, and semimembranosus. These muscles play a vital role in knee flexion and hip extension, contributing to movements such as walking, running, and bending the knee. Strengthening exercises like deadlifts and leg curls help develop hamstring strength and flexibility."
        ]);

        Muscle::create([
            "muscleName" => "Calf",
            "otherName" => "Gastrocnemius",
            "description" => "The calf muscles, often simply called the calves, refer to the muscles located at the back of the lower leg. The two primary muscles in this region are the gastrocnemius and the soleus. These muscles are crucial for ankle movement, including plantar flexion (pointing the toes downward). Strengthening exercises such as calf raises help develop calf muscles and enhance lower leg strength."
        ]);

        Muscle::create([
            "muscleName" => "Full Body",
            "otherName" => "Train Every Muscle",
            "description" => "A full-body workout engages multiple muscle groups across the upper and lower body, enhancing overall strength and fitness. Incorporating exercises like squats, deadlifts, and push-ups, these routines offer a comprehensive approach for efficient and effective training in a single session."
        ]);

        Muscle::create([
            "muscleName" => "Cardio",
            "otherName" => "Cardiovascular Exercise",
            "description" => "Cardio, short for cardiovascular exercise, refers to activities that elevate your heart rate and increase oxygen circulation throughout the body. Common cardio exercises include running, cycling, swimming, and brisk walking. These activities are essential for improving cardiovascular health, stamina, and burning calories. Regular cardio workouts contribute to overall fitness and can be customized to various intensities, durations, and preferences."
        ]);
    }
}