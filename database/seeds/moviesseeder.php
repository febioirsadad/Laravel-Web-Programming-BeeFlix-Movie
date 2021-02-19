<?php

use Illuminate\Database\Seeder;

class moviesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
        [
            'genre_id'=>'1',
            'title'=>'Parasite',
            'photo'=>'img/parasite.jpg',
            'description'=>'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.',
            'rating'=>'8.9'
        ],
        [
            'genre_id'=>'1',
            'title'=>'Descendant Of The Sun',
            'photo'=>'img/DescendantsoftheSun.jpg',
            'description'=>'A love story between Captain Yoo Shi Jin, Korean Special Forces, and Doctor Kang Mo Yeon, surgeon at Haesung Hospital. Together they face danger in a war-torn country.',
            'rating'=>'7.7'
        ],
        [
            'genre_id'=>'1',
            'title'=>'Reply 1988',
            'photo'=>'img/reply1988.jpg',
            'description'=>'Follows the lives of 5 families living on the same street in a neighbourhood called Ssangmundong in Seoul. A nostalgic look back at the year 1988.',
            'rating'=>'7.5'
        ],
        [
            'genre_id'=>'1',
            'title'=>'waiki',
            'photo'=>'img/waiki.jpg',
            'description'=>'Three young men join forces in a guesthouse venture with one dream in mind, to finance their own film project. However, the venture is anything but profitable.',
            'rating'=>'7.2'
        ],
        [
            'genre_id'=>'2',
            'title'=>'Cinderella',
            'photo'=>'img/cinderella.jpg',
            'description'=>'After the untimely death of her father, Ella is troubled by her stepmother and stepsisters. However, her life changes forever after dancing with a charming stranger at the Royal Ball.',
            'rating'=>'6.9'
        ],
        [
            'genre_id'=>'2',
            'title'=>'Kungfu Panda 3',
            'photo'=>'img/kungfupanda3.jpg',
            'description'=>'The Dragon Warrior, Po, has to deal with challenges galore when circumstances compel him to train a bunch of awkward pandas in martial arts so that they can trounce Kai, a wicked supernatural warrior.',
            'rating'=>'7.7'
        ],
        [
            'genre_id'=>'2',
            'title'=>'The Lion King',
            'photo'=>'img/lionking.jpg',
            'description'=>'Simba, a young lion prince, flees his kingdom after the murder of his father, Mufasa. Years later, a chance encounter with Nala, a lioness, causes him to return and take back what is rightfully his.',
            'rating'=>'7.5'
        ],
        [
            'genre_id'=>'2',
            'title'=>'Baby Boss',
            'photo'=>'img/babyboss.jpg',
            'description'=>'Seven-year-old Tim gets jealous when his parents give all their attention to his little brother. Tim soon learns that the baby can talk and the two team up to foil the plans of the CEO of Puppy Co.',
            'rating'=>'8.2'
        ],
        [
            'genre_id'=>'3',
            'title'=>'Goedam',
            'photo'=>'img/goedam.jpg',
            'description'=>'When night falls on the city, shadows and spirits come alive in this horror anthology series centered on urban legends.',
            'rating'=>'8.9'
        ],
        [
            'genre_id'=>'3',
            'title'=>'Kingdom',
            'photo'=>'img/kingdom.jpg',
            'description'=>'The deceased king rises and a mysterious plague begins to spread; the prince must face a new breed of enemies to unveil the evil scheme and save his people.',
            'rating'=>'8.7'
        ],
        [
            'genre_id'=>'3',
            'title'=>'Chapo',
            'photo'=>'img/chapo.jpg',
            'description'=>'Joaquin "El Chapo" Guzmán is notorious for being one of the biggest drug kingpins in history, but he obviously didnt start out at the top. This crime drama tracks El Chapo life in crime, from his lowly beginnings in the Guadalajara Cartel in the 1980s through his rise to power -- and eventual fall -- as the leader of the Sinaloa Cartel.',
            'rating'=>'6.5'
        ],
        [
            'genre_id'=>'3',
            'title'=>'Punisher',
            'photo'=>'img/Punisher.jpg',
            'description'=>'After exacting revenge on the people responsible for the deaths of his wife and children, Frank Castle uncovers a conspiracy that runs deeper than New York criminal underworld. Now known as the Punisher, he must dig deep into the conspiracy to discover the truth about injustices that affect more than just him and his family.',
            'rating'=>'7.2'
        ]
        ]);
    }
}
