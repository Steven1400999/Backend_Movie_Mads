<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = new Movie();
        $movies->title = "Kingdom of the Planet of the Apes";
        $movies->description = "Director Wes Ball breathes new life into the global, epic franchise set several generations in the future following Caesar's reign, in which apes are the dominant species living harmoniously and humans have been reduced to living in the shadows. As a new tyrannical ape leader builds his empire, one young ape undertakes a harrowing journey that will cause him to question all that he has known about the past and to make choices that will define a future for apes and humans alike.";
        $movies->duration = "1:45:00";
        $movies->category_id = 1;
        $movies->language_id = 2;
        $movies->dubbing_id = 2;
        $movies->subtitle_id = 1;
        $movies->image = 'https://all.web.img.acsta.net/img/4b/99/4b996bc8a476c44a75dc87066ad89903.jpg/r_500_x'; 
        $movies->save();

        $movies = new Movie();
        $movies->title = "Not Another Church Movie";
        $movies->description = "Hoprah Windfall, fretting as her ratings plummet because her talk show and audience need some new blood, calls on God and demands His help. God and his angels decide there’s no better choice to replace her with than the hardest working man in the world, Taylor Pherry. But when the Devil overhears this, he comes up with a fiendish plan of his own to disrupt the whole ordeal. While Taylor prepares for one of his many jobs that mostly entail helping his dysfunctional but lovable family through their trials and tribulations, God appears and orders him to help Hoprah accomplish her mission, by writing a movie. By looking at the crazy women in his life he finds the very substance of the storylines for his screenplay!";
        $movies->duration = "1:28:00";
        $movies->category_id = 17;
        $movies->language_id = 1;
        $movies->dubbing_id = 1;
        $movies->subtitle_id = 1;
        $movies->image = 'https://all.web.img.acsta.net/img/e2/77/e2778a0efcb9b6fac6d329922ef26ce7.jpg/r_500_x'; 
        $movies->save();

        $movies = new Movie();
        $movies->title = "The Fall Guy";
        $movies->description = "He's a stuntman, and like everyone in the stunt community, he gets blown up, shot, crashed, thrown through windows and dropped from the highest of heights, all for our entertainment. And now, fresh off an almost career-ending accident, this working-class hero has to track down a missing movie star, solve a conspiracy and try to win back the love of his life while still doing his day job. What could possibly go right?";
        $movies->duration = "2:05:00";
        $movies->category_id = 1;
        $movies->language_id = 1;
        $movies->dubbing_id = 1;
        $movies->subtitle_id = 1;
        $movies->image = 'https://all.web.img.acsta.net/img/b9/c9/b9c9a6fded068e772162e34f25082646.jpg/r_250_x'; 
        $movies->save();

        $movies = new Movie();
        $movies->title = "Star Wars Episode 1 The Phantom Menace 25th Anniversary";
        $movies->description = "Experience the heroic action and unforgettable adventures of Star Wars: Episode I - The Phantom Menace. See the first fateful steps in the journey of Anakin Skywalker. Stranded on the desert planet Tatooine after rescuing young Queen Amidala from the impending invasion of Naboo, Jedi apprentice Obi-Wan Kenobi and his Jedi Master Qui-Gon Jinn discover nine-year-old Anakin, who is unusually strong in the Force. Anakin wins a thrilling Podrace and with it his freedom as he leaves his home to be trained as a Jedi. The heroes return to Naboo where Anakin and the Queen face massive invasion forces while the two Jedi contend with a deadly foe named Darth Maul. Only then do they realize the invasion is merely the first step in a sinister scheme by the re-emergent forces of darkness known as the Sith. After the feature, fans will also get a special first look at Star Wars: The Acolyte series coming to Disney+ June 2024.";
        $movies->duration = "2:11:00";
        $movies->category_id = 10;
        $movies->language_id = 1;
        $movies->dubbing_id = 1;
        $movies->subtitle_id = 1;
        $movies->image = 'https://all.web.img.acsta.net/img/ff/02/ff025fd1516c760ddc17c8166732dc2b.jpg/r_250_x'; 
        $movies->save();


        $movies = new Movie();
        $movies->title = "Tarot";
        $movies->description = "When a group of friends recklessly violates the sacred rule of Tarot readings - never use someone else's deck - they unknowingly unleash an unspeakable evil trapped within the cursed cards. One by one, they come face to face with fate and end up in a race against death to escape the future foretold in their readings.";
        $movies->duration = "1:32:00";
        $movies->category_id = 7;
        $movies->language_id = 3;
        $movies->dubbing_id = 3;
        $movies->subtitle_id = 1;
        $movies->image = 'https://all.web.img.acsta.net/img/65/3d/653dfc1855275598e6aff981b3b56fcd.jpg/r_250_x'; 
        $movies->save();


        $movies = new Movie();
        $movies->title = "Unsung Hero";
        $movies->description = "When David Smallbone's successful music company collapses, he moves his family from Australia to the States, searching for a brighter future. With nothing more than their seven children, suitcases, and their love of music, David (for KING + COUNTRY's Joel Smallbone) and his pregnant wife Helen (Daisy Betts) set out to rebuild their lives. Based on a remarkable true story, Helen's faith stands against all odds and inspires her husband and children to hold onto theirs. With their own dreams on hold, David and Helen begin to realize the musical prowess in their children, who would go on to become two of the most successful acts in Inspirational Music history: five-time Grammy Award-winning artists for KING + COUNTRY and Rebecca St. James.";
        $movies->duration = "1:52:00";
        $movies->category_id = 16;
        $movies->language_id = 1;
        $movies->dubbing_id = 1;
        $movies->subtitle_id = 1;
        $movies->image = 'https://all.web.img.acsta.net/img/24/f3/24f373031ccee894d60efb502f95e984.jpg/r_250_x'; 
        $movies->save();


        $movies = new Movie();
        $movies->title = "Challengers";
        $movies->description = "From visionary filmmaker Luca Guadagnino, Challengers stars Zendaya as Tashi Duncan, a former tennis prodigy turned coach and a force of nature who makes no apologies for her game on and off the court. Married to a champion on a losing streak (Mike Faist - West Side Story), Tashi's strategy for her husband's redemption takes a surprising turn when he must face off against the washed-up Patrick (Josh O'Connor -The Crown) - his former best friend and Tashi's former boyfriend. As their pasts and presents collide, and tensions run high, Tashi must ask herself, what will it cost to win.";
        $movies->duration = "2:11:00";
        $movies->category_id = 4;
        $movies->language_id = 1;
        $movies->dubbing_id = 1;
        $movies->subtitle_id = 1;
        $movies->image = 'https://all.web.img.acsta.net/img/af/17/af175049dfa0f569b06c96c7bf6647df.jpg/r_250_x'; 
        $movies->save();


        $movies = new Movie();
        $movies->title = "Srikanth";
        $movies->description = "In a world with odds stacked against him every step of the way, Srikanth defies norms, blazing a trail from rural India to becoming the first visually impaired student at MIT. As he builds Bollant Industries, his success brings challenges for which he would not only chase personal dreams but safeguard a shared future for the ones just like him. This is the tale of an entrepreneur`s triumph and sacrifice, both which he welcomed with open arms and a smile.";
        $movies->duration = "2:14:00";
        $movies->category_id = 4;
        $movies->language_id = 7;
        $movies->dubbing_id = 1;
        $movies->subtitle_id = 3;
        $movies->image = 'https://all.web.img.acsta.net/img/69/7e/697ec64c3790ba9eee84bfd872b4dc67.jpg/r_250_x'; 
        $movies->save();


        $movies = new Movie();
        $movies->title = "Kung Fu Panda 4";
        $movies->description = "After three death-defying adventures defeating world-class villains with his unmatched courage and mad martial arts skills, Po, the Dragon Warrior (Golden Globe nominee Jack Black), is called upon by destiny to... give it a rest already. More specifically, he's tapped to become the Spiritual Leader of the Valley of Peace.That poses a couple of obvious problems. First, Po knows as much about spiritual leadership as he does about the paleo diet, and second, he needs to quickly find and train a new Dragon Warrior before he can assume his new lofty position. Even worse, there's been a recent sighting of a wicked, powerful sorceress, Chameleon (Oscar® winner Viola Davis), a tiny lizard who can shapeshift into any creature, large or small. And Chameleon has her greedy, beady little eyes on Po's Staff of Wisdom, which would give her the power to re-summon all the master villains whom Po has vanquished to the spirit realm. Po must team up with the quick-witted thief Zhen in order to protect the Valley of Peace from Chameleon's claws.";
        $movies->duration = "1:34:00";
        $movies->category_id = 13;
        $movies->language_id = 6;
        $movies->dubbing_id = 8;
        $movies->subtitle_id = 5;
        $movies->image = 'https://all.web.img.acsta.net/img/03/27/0327e641c613219f856c1541acc219d4.jpg/r_250_x'; 
        $movies->save();


        $movies = new Movie();
        $movies->title = "The Ministry of Ungentlemanly Warfare";
        $movies->description = "Based upon recently declassified files of the British War Department and inspired by true events, THE MINISTRY OF UNGENTLEMANLY WARFARE is an action-comedy that tells the story of the first-ever special forces organization formed during WWII by UK Prime Minister Winston Churchill and a small group of military officials including author Ian Fleming. The top-secret combat unit, composed of a motley crew of rogues and mavericks, goes on a daring mission against the Nazis using entirely unconventional and utterly fighting techniques. Ultimately their audacious approach changed the course of the war and laid the foundation for the British SAS and modern Black Ops warfare.";
        $movies->duration = "2:00:00";
        $movies->category_id = 1;
        $movies->language_id = 2;
        $movies->dubbing_id = 3;
        $movies->subtitle_id = 3;
        $movies->image = 'https://all.web.img.acsta.net/img/86/84/8684af7224319ba4d1edbcdc6cdda36d.jpg/r_250_x'; 
        $movies->save();


        $movies = new Movie();
        $movies->title = "Abigail";
        $movies->description = "After a group of would-be criminals kidnap the 12-year-old ballerina daughter of a powerful underworld figure, all they have to do to collect a $50 million ransom is watch the girl overnight. In an isolated mansion, the captors start to dwindle, one by one, and they discover, to their mounting horror, that they're locked inside with no normal little girl.";
        $movies->duration = "1:49:00";
        $movies->category_id = 7;
        $movies->language_id = 2;
        $movies->dubbing_id = 1;
        $movies->subtitle_id = 1;
        $movies->image = 'https://all.web.img.acsta.net/img/9c/03/9c03e0bb50614600e55f9109751a4965.jpg/r_250_x'; 
        $movies->save();


        $movies = new Movie();
        $movies->title = "Civil War";
        $movies->description = "From filmmaker Alex Garland comes a journey across a dystopian future America, following a team of military-embedded journalists as they race against time to reach DC before rebel factions descend upon the White House.";
        $movies->duration = "1:49:00";
        $movies->category_id = 1;
        $movies->language_id = 2;
        $movies->dubbing_id = 9;
        $movies->subtitle_id = 1;
        $movies->image = 'https://all.web.img.acsta.net/img/2e/9c/2e9c708fe677e67d980a9142237a73d8.jpg/r_250_x'; 
        $movies->save();


        $movies = new Movie();
        $movies->title = "The First Omen";
        $movies->description = "When a young American woman is sent to Rome to begin a life of service to the church, she encounters a darkness that causes her to question her own faith and uncovers a terrifying conspiracy that hopes to bring about the birth of evil incarnate.";
        $movies->duration = "1:57:00";
        $movies->category_id = 11;
        $movies->language_id = 2;
        $movies->dubbing_id = 1;
        $movies->subtitle_id = 2;
        $movies->image = 'https://all.web.img.acsta.net/img/a9/87/a98710b02c77e54fe97f0ff03f318a42.jpg/r_250_x'; 
        $movies->save();


        $movies = new Movie();
        $movies->title = "Godzilla x Kong: The New Empire";
        $movies->description = "The epic battle continues! Legendary Pictures' cinematic Monsterverse follows up the explosive showdown of Godzilla vs. Kong with an all-new adventure that pits the almighty Kong and the fearsome Godzilla against a colossal undiscovered threat hidden within our world, challenging their very existence - and our own. Godzilla x Kong: The New Empire delves further into the histories of these Titans and their origins, as well as the mysteries of Skull Island and beyond, while uncovering the mythic battle that helped forge these extraordinary beings and tied them to humankind forever.";
        $movies->duration = "1:55:00";
        $movies->category_id = 12;
        $movies->language_id = 1;
        $movies->dubbing_id = 1;
        $movies->subtitle_id = 3;
        $movies->image = 'https://all.web.img.acsta.net/img/a2/83/a283912b951da6edef9312dfb617d076.jpg/r_250_x'; 
        $movies->save();


        $movies = new Movie();
        $movies->title = "Ghostbusters: Frozen Empire";
        $movies->description = "In Ghostbusters: Frozen Empire, the Spengler family returns to where it all started - the iconic New York City firehouse - to team up with the original Ghostbusters, who've developed a top-secret research lab to take busting ghosts to the next level. But when the discovery of an ancient artifact unleashes an army of ghosts that casts a death chill upon the city, Ghostbusters new and old must join forces to protect their home and save the world from a second Ice Age.";
        $movies->duration = "1:56:00";
        $movies->category_id = 2;
        $movies->language_id = 2;
        $movies->dubbing_id = 1;
        $movies->subtitle_id = 1;
        $movies->image = 'https://cms-assets.webediamovies.pro/cdn-cgi/image/dpr=1,fit=scale-down,gravity=auto,metadata=none,quality=85,width=250/production/241/face68697533e2fa309b3bc09fa56f58.jpg'; 
        $movies->save();


        $movies = new Movie();
        $movies->title = "Dune: Part Two";
        $movies->description = "Dune: Part Two will explore the mythic journey of Paul Atreides as he unites with Chani and the Fremen while on a warpath of revenge against the conspirators who destroyed his family. Facing a choice between the love of his life and the fate of the known universe, he endeavors to prevent a terrible future only he can foresee.";
        $movies->duration = "2:46:00";
        $movies->category_id =10;
        $movies->language_id = 4;
        $movies->dubbing_id = 1;
        $movies->subtitle_id = 9;
        $movies->image = 'https://all.web.img.acsta.net/img/e3/17/e317dd65e98c053a22b823ed953d4390.jpg/r_250_x'; 
        $movies->save();


        
    }
}
