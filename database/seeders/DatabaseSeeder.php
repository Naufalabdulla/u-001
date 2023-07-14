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
        alphabet::create(['letter' => 'sa']);
        alphabet::create(['letter' => 'shi']);
        alphabet::create(['letter' => 'su']);
        alphabet::create(['letter' => 'se']);
        alphabet::create(['letter' => 'so']);
        alphabet::create(['letter' => 'ta']);
        alphabet::create(['letter' => 'chi']);
        alphabet::create(['letter' => 'tsu']);
        alphabet::create(['letter' => 'te']);
        alphabet::create(['letter' => 'to']);
        // alphabet::create(['letter' => 'x']);
        // alphabet::create(['letter' => 'x']);
        // alphabet::create(['letter' => 'x']);
        // alphabet::create(['letter' => 'x']);
        // alphabet::create(['letter' => 'x']);
        // alphabet::create(['letter' => 'x']);
        
        // -----HIRAGANA-----
        hiragana::create(['hiragana' => 'あ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'い', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'う', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'え', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'お', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'か', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'き', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'く', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'け', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'こ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'が', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ぎ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ぐ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'げ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ご', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'さ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'し', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'す', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'せ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'そ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ざ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'じ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ず', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ぜ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ぞ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'た', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ち', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'つ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'て', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'と', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'だ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ぢ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'づ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'で', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ど', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'な', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'に', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ぬ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ね', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'の', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ま', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'み', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'む', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'め', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'も', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'は', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ひ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ふ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'へ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ほ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ば', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'び', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ぶ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'べ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ぼ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ぱ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ぴ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'う', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ぺ', 'alphabet_id' => 0]);
        hiragana::create(['hiragana' => 'ぽ', 'alphabet_id' => 0]);
        // hiragana::create(['hiragana' => 'ら', 'alphabet_id' => 0]);
        // hiragana::create(['hiragana' => 'り', 'alphabet_id' => 0]);
        // hiragana::create(['hiragana' => 'る', 'alphabet_id' => 0]);
        // hiragana::create(['hiragana' => 'れ', 'alphabet_id' => 0]);
        // hiragana::create(['hiragana' => 'ろ', 'alphabet_id' => 0]);
        // hiragana::create(['hiragana' => 'や', 'alphabet_id' => 0]);
        // hiragana::create(['hiragana' => 'ゆ', 'alphabet_id' => 0]);
        // hiragana::create(['hiragana' => 'よ', 'alphabet_id' => 0]);
        // hiragana::create(['hiragana' => 'わ', 'alphabet_id' => 0]);
        // hiragana::create(['hiragana' => 'を', 'alphabet_id' => 0]);
        // hiragana::create(['hiragana' => 'ん', 'alphabet_id' => 0]);
        
        
    }
}
