<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Episode;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'name' => 'DRAMA'
        ]);

        Genre::create([
            'name' => 'KIDS'
        ]);

        Genre::create([
            'name' => 'TV SHOW'
        ]);

        // DRAMA
        Movie::create([
            'genre_id' => 1,
            'title' => 'The Sound of Magic',
            'photo' => 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/04/28/909003675.jpg',
            'description' => 'Do you believe in magic?” These are the words muttered constantly throughout The Sound Of Magic like a mantra by the mysterious, enigmatic magician Ri-eul (Ji Chang-wook), who dwells in a derelict amusement park – though, to most townspeople, he only exists in the rumours and whispers. Characterised by a stereotypical magician’s garb, comprising a top hat and a flowy cape to match, Ri-eul is almost always met with skepticism and ridicule when he poses the question; the answer is obviously and usually no.',
            'rating' => '7.5',
        ]);

        Movie::create([
            'genre_id' => 1,
            'title' => 'Our Blues',
            'photo' => 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/03/07/616832122.jpeg',
            'description' => '"Our Blues" follows the intertwining stories of various locals living on Jeju Island in South Korea, from a truck driver and a fish-shop owner to a diver and a ship captain. The show will touch on the characters loves, heartbreaks, friendship, and more as they subtly figure in one anothers lives.',
            'rating' => '6,9',
        ]);

        Movie::create([
            'genre_id' => 1,
            'title' => 'Business Proposal',
            'photo' => 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/02/04/963776099.jpg',
            'description' => 'Shin Ha-Ri (Kim Se-Jeong) is a single woman and works for a company. She has a male friend and she has held a crush on him for a long time, but she learns that her friend has a girlfriend. Shin Ha-Ri feels sad and decides to meet her friend Jin Young-Seo, who is a daughter of a chaebol family. Jin Young-Seo then asks Shin Ha-Ri to take her place in a blind date and even offers some money for her time. ',
            'rating' => '8,7',
        ]);

        Movie::create([
            'genre_id' => 1,
            'title' => 'Slow Horses',
            'photo' => 'https://pics.filmaffinity.com/slow_horses-782634780-large.jpg',
            'description' => 'It is an adaptation of author Mick Herrons Slough House series of spy novels. Slow Horses follows a team of MI5 intelligence agents who share a common bond — they have all messed up their careers and have been sent to Slough House, the dumping ground department of MI5, to carry out paper-pushing tasks as a result.',
            'rating' => '9,0',
        ]);

        //KIDS
        Movie::create([
            'genre_id' => 2,
            'title' => 'SpongeBob SquarePants',
            'photo' => 'https://www.themoviedb.org/t/p/original/vvBdR6XmSQFNgin9tzmMlsrWBgM.jpg',
            'description' => 'A square yellow sponge named SpongeBob SquarePants lives in a pineapple with his pet snail, Gary, in the city of Bikini Bottom on the floor of the Pacific Ocean. He works as a fry cook at the Krusty Krab. During his time off, SpongeBob has a knack for attracting trouble with his starfish best friend, Patrick.',
            'rating' => '9,8',
        ]);

        Movie::create([
            'genre_id' => 2,
            'title' => 'PAW Patrol',
            'photo' => 'https://m.media-amazon.com/images/M/MV5BMTkzYWFlZjItZWE0My00YjBhLWE3MjgtNWJjZDhlZmUzMDg4XkEyXkFqcGdeQXVyNjExODE1MDc@._V1_FMjpg_UX1000_.jpg',
            'description' => 'The series focuses on a young boy named Ryder who leads a crew of search and rescue dogs that call themselves the PAW Patrol. They work together on missions to protect the shoreside community of Adventure Bay and surrounding areas.',
            'rating' => '8,6',
        ]);

        Movie::create([
            'genre_id' => 2,
            'title' => 'Shaun the Sheep',
            'photo' => 'https://m.media-amazon.com/images/M/MV5BNDExMGUxMjAtMTY0Mi00MDBiLTg3MGItOWY4ZTM3NGZjYTBjXkEyXkFqcGdeQXVyNzMwOTY2NTI@._V1_.jpg',
            'description' => 'Shaun is the main character of the series and the leader of the flock. He is a clever sheep and keeps his head. He has a good friendship with Bitzer and very smart. He is voiced by Justin Fletcher.',
            'rating' => '7,9',
        ]);

        Movie::create([
            'genre_id' => 2,
            'title' => 'ChalkZone',
            'photo' => 'https://pics.filmaffinity.com/ChalkZone_TV_Series-486508334-large.jpg',
            'description' => 'The series follows Rudy Tabootie, an elementary school student who discovers a box of magic chalk that allows him to draw portals into the ChalkZone, an alternate dimension where everything ever drawn on a blackboard and erased turns to life.',
            'rating' => '8,3',
        ]);

        //TV SHOW
        Movie::create([
            'genre_id' => 3,
            'title' => 'Money Heist',
            'photo' => 'https://geotimes.id/wp-content/uploads/2017/08/money-heist-s-4.jpg',
            'description' => 'To carry out the biggest heist in history, a mysterious man called The Professor recruits a band of eight robbers who have a single characteristic: none of them has anything to lose. Five months of seclusion memorizing every step, every detail, every probability culminate in eleven days locked up in the National Coinage and Stamp Factory of Spain, surrounded by police forces and with dozens of hostages in their power, to find out whether their suicide wager will lead to everything or nothing.',
            'rating' => '9,2',
        ]);

        Movie::create([
            'genre_id' => 3,
            'title' => 'Taxi Driver',
            'photo' => 'https://m.media-amazon.com/images/M/MV5BMGFlYmMzYzEtMDI0Mi00MTU1LThhNzItZThkNTg1NjMyM2VkXkEyXkFqcGdeQXVyNDY5MjMyNTg@._V1_FMjpg_UX1000_.jpg',
            'description' => 'A former special forces soldier delivers revenge for victims of injustice while working for a secret organization that fronts as a taxi company.',
            'rating' => '8,1',
        ]);

        Movie::create([
            'genre_id' => 3,
            'title' => 'Lupin',
            'photo' => 'https://resizing.flixster.com/FvUX-kMi-cH2PPRZOzRIR1EARGI=/ems.ZW1zLXByZC1hc3NldHMvdHZzZWFzb24vUlRUVjkxNDYxMy53ZWJw',
            'description' => 'Inspired by the adventures of Arsène Lupin, gentleman thief Assane Diop sets out to avenge his father for an injustice inflicted by a wealthy family.',
            'rating' => '7,5',
        ]);

        Movie::create([
            'genre_id' => 3,
            'title' => 'Arrow',
            'photo' => 'https://m.media-amazon.com/images/M/MV5BMTI0NTMwMDgtYTMzZC00YmJhLTg4NzMtMTc1NjI4MWY4NmQ4XkEyXkFqcGdeQXVyNTY3MTYzOTA@._V1_.jpg',
            'description' => 'After many years in a sheltered, rich boy life, Oliver Queen is stranded on an island after his father yacht crashes. He must learn to survive on his own, five years later he is found alive and well after he was presumed to be dead. After he returns to his home city of Starling City, he begins his crusade to rid his home city of nasty villains, drug dealers, mob bosses, and criminals by becoming an arrow shooting vigilante.',
            'rating' => '7,5',
        ]);

        $episodesTitle = ['Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan'];

        for($i=0; $i<12; $i++){
            for($j=0; $j<9; $j++){
                Episode::create([
                    'movie_id' => $i+1,
                    'episode' => $j+1,
                    'title' => $episodesTitle[$j]
                ]);
            }
        }
    }
}
