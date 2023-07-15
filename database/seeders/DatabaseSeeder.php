<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\alphabet;
use App\Models\hiragana;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // -----ALPHABET-----
        alphabet::create(['letter' => 'a']);
        alphabet::create(['letter' => 'i']);
        alphabet::create(['letter' => 'u']);
        alphabet::create(['letter' => 'e']);
        alphabet::create(['letter' => 'o']);
        alphabet::create(['letter' => 'ka']);
        alphabet::create(['letter' => 'ki']);
        alphabet::create(['letter' => 'ku']);
        alphabet::create(['letter' => 'ke']);
        alphabet::create(['letter' => 'ko']);
        alphabet::create(['letter' => 'ga']);
        alphabet::create(['letter' => 'gi']);
        alphabet::create(['letter' => 'gu']);
        alphabet::create(['letter' => 'ge']);
        alphabet::create(['letter' => 'go']);
        alphabet::create(['letter' => 'sa']);
        alphabet::create(['letter' => 'shi']);
        alphabet::create(['letter' => 'su']);
        alphabet::create(['letter' => 'se']);
        alphabet::create(['letter' => 'so']);
        alphabet::create(['letter' => 'za']);
        alphabet::create(['letter' => 'ji']);
        alphabet::create(['letter' => 'zu']);
        alphabet::create(['letter' => 'ze']);
        alphabet::create(['letter' => 'zo']);
        alphabet::create(['letter' => 'ta']);
        alphabet::create(['letter' => 'chi']);
        alphabet::create(['letter' => 'tsu']);
        alphabet::create(['letter' => 'te']);
        alphabet::create(['letter' => 'to']);
        alphabet::create(['letter' => 'da']);
        alphabet::create(['letter' => 'dji']);
        alphabet::create(['letter' => 'tzu']);
        alphabet::create(['letter' => 'de']);
        alphabet::create(['letter' => 'do']);
        alphabet::create(['letter' => 'na']);
        alphabet::create(['letter' => 'ni']);
        alphabet::create(['letter' => 'nu']);
        alphabet::create(['letter' => 'ne']);
        alphabet::create(['letter' => 'no']);
        alphabet::create(['letter' => 'ma']);
        alphabet::create(['letter' => 'mi']);
        alphabet::create(['letter' => 'mu']);
        alphabet::create(['letter' => 'me']);
        alphabet::create(['letter' => 'mo']);
        alphabet::create(['letter' => 'ha']);
        alphabet::create(['letter' => 'hi']);
        alphabet::create(['letter' => 'fu']);
        alphabet::create(['letter' => 'he']);
        alphabet::create(['letter' => 'ho']);
        alphabet::create(['letter' => 'ba']);
        alphabet::create(['letter' => 'bi']);
        alphabet::create(['letter' => 'bu']);
        alphabet::create(['letter' => 'be']);
        alphabet::create(['letter' => 'bo']);
        alphabet::create(['letter' => 'pa']);
        alphabet::create(['letter' => 'pi']);
        alphabet::create(['letter' => 'pu']);
        alphabet::create(['letter' => 'pe']);
        alphabet::create(['letter' => 'po']);
        alphabet::create(['letter' => 'ra']);
        alphabet::create(['letter' => 'ri']);
        alphabet::create(['letter' => 'ru']);
        alphabet::create(['letter' => 're']);
        alphabet::create(['letter' => 'ro']);
        alphabet::create(['letter' => 'ya']);
        alphabet::create(['letter' => 'yu']);
        alphabet::create(['letter' => 'yo']);
        alphabet::create(['letter' => 'wa']);
        alphabet::create(['letter' => 'wo']);
        alphabet::create(['letter' => 'n']);
        
        // -----HIRAGANA-----
        hiragana::create(['hiragana' => 'あ', 'alphabet_id' => 1]);
        hiragana::create(['hiragana' => 'い', 'alphabet_id' => 2]);
        hiragana::create(['hiragana' => 'う', 'alphabet_id' => 3]);
        hiragana::create(['hiragana' => 'え', 'alphabet_id' => 4]);
        hiragana::create(['hiragana' => 'お', 'alphabet_id' => 5]);
        hiragana::create(['hiragana' => 'か', 'alphabet_id' => 6]);
        hiragana::create(['hiragana' => 'き', 'alphabet_id' => 7]);
        hiragana::create(['hiragana' => 'く', 'alphabet_id' => 8]);
        hiragana::create(['hiragana' => 'け', 'alphabet_id' => 9]);
        hiragana::create(['hiragana' => 'こ', 'alphabet_id' => 10]);
        hiragana::create(['hiragana' => 'が', 'alphabet_id' => 11]);
        hiragana::create(['hiragana' => 'ぎ', 'alphabet_id' => 12]);
        hiragana::create(['hiragana' => 'ぐ', 'alphabet_id' => 13]);
        hiragana::create(['hiragana' => 'げ', 'alphabet_id' => 14]);
        hiragana::create(['hiragana' => 'ご', 'alphabet_id' => 15]);
        hiragana::create(['hiragana' => 'さ', 'alphabet_id' => 16]);
        hiragana::create(['hiragana' => 'し', 'alphabet_id' => 17]);
        hiragana::create(['hiragana' => 'す', 'alphabet_id' => 18]);
        hiragana::create(['hiragana' => 'せ', 'alphabet_id' => 19]);
        hiragana::create(['hiragana' => 'そ', 'alphabet_id' => 20]);
        hiragana::create(['hiragana' => 'ざ', 'alphabet_id' => 21]);
        hiragana::create(['hiragana' => 'じ', 'alphabet_id' => 22]);
        hiragana::create(['hiragana' => 'ず', 'alphabet_id' => 23]);
        hiragana::create(['hiragana' => 'ぜ', 'alphabet_id' => 24]);
        hiragana::create(['hiragana' => 'ぞ', 'alphabet_id' => 25]);
        hiragana::create(['hiragana' => 'た', 'alphabet_id' => 26]);
        hiragana::create(['hiragana' => 'ち', 'alphabet_id' => 27]);
        hiragana::create(['hiragana' => 'つ', 'alphabet_id' => 28]);
        hiragana::create(['hiragana' => 'て', 'alphabet_id' => 29]);
        hiragana::create(['hiragana' => 'と', 'alphabet_id' => 30]);
        hiragana::create(['hiragana' => 'だ', 'alphabet_id' => 31]);
        hiragana::create(['hiragana' => 'ぢ', 'alphabet_id' => 32]);
        hiragana::create(['hiragana' => 'づ', 'alphabet_id' => 33]);
        hiragana::create(['hiragana' => 'で', 'alphabet_id' => 34]);
        hiragana::create(['hiragana' => 'ど', 'alphabet_id' => 35]);
        hiragana::create(['hiragana' => 'な', 'alphabet_id' => 36]);
        hiragana::create(['hiragana' => 'に', 'alphabet_id' => 37]);
        hiragana::create(['hiragana' => 'ぬ', 'alphabet_id' => 38]);
        hiragana::create(['hiragana' => 'ね', 'alphabet_id' => 39]);
        hiragana::create(['hiragana' => 'の', 'alphabet_id' => 40]);
        hiragana::create(['hiragana' => 'ま', 'alphabet_id' => 41]);
        hiragana::create(['hiragana' => 'み', 'alphabet_id' => 42]);
        hiragana::create(['hiragana' => 'む', 'alphabet_id' => 43]);
        hiragana::create(['hiragana' => 'め', 'alphabet_id' => 44]);
        hiragana::create(['hiragana' => 'も', 'alphabet_id' => 45]);
        hiragana::create(['hiragana' => 'は', 'alphabet_id' => 46]);
        hiragana::create(['hiragana' => 'ひ', 'alphabet_id' => 47]);
        hiragana::create(['hiragana' => 'ふ', 'alphabet_id' => 48]);
        hiragana::create(['hiragana' => 'へ', 'alphabet_id' => 49]);
        hiragana::create(['hiragana' => 'ほ', 'alphabet_id' => 50]);
        hiragana::create(['hiragana' => 'ば', 'alphabet_id' => 51]);
        hiragana::create(['hiragana' => 'び', 'alphabet_id' => 52]);
        hiragana::create(['hiragana' => 'ぶ', 'alphabet_id' => 53]);
        hiragana::create(['hiragana' => 'べ', 'alphabet_id' => 54]);
        hiragana::create(['hiragana' => 'ぼ', 'alphabet_id' => 55]);
        hiragana::create(['hiragana' => 'ぱ', 'alphabet_id' => 56]);
        hiragana::create(['hiragana' => 'ぴ', 'alphabet_id' => 57]);
        hiragana::create(['hiragana' => 'ぷ', 'alphabet_id' => 58]);
        hiragana::create(['hiragana' => 'ぺ', 'alphabet_id' => 59]);
        hiragana::create(['hiragana' => 'ぽ', 'alphabet_id' => 60]);
        hiragana::create(['hiragana' => 'ら', 'alphabet_id' => 61]);
        hiragana::create(['hiragana' => 'り', 'alphabet_id' => 62]);
        hiragana::create(['hiragana' => 'る', 'alphabet_id' => 63]);
        hiragana::create(['hiragana' => 'れ', 'alphabet_id' => 64]);
        hiragana::create(['hiragana' => 'ろ', 'alphabet_id' => 65]);
        hiragana::create(['hiragana' => 'や', 'alphabet_id' => 66]);
        hiragana::create(['hiragana' => 'ゆ', 'alphabet_id' => 67]);
        hiragana::create(['hiragana' => 'よ', 'alphabet_id' => 68]);
        hiragana::create(['hiragana' => 'わ', 'alphabet_id' => 69]);
        hiragana::create(['hiragana' => 'を', 'alphabet_id' => 70]);
        hiragana::create(['hiragana' => 'ん', 'alphabet_id' => 71]);
        
        
    }
}
