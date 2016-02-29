# Fuzzy

This Package can be used for generating fuzzy terms for fuzzy search.

## Installation

install using composer

composer require wedamir/fuzzy:@dev

## Usage

$fuzzyTermsGenerator = new \Wedamir\Fuzzy();
$fuzzyTerms = $fuzzyTermGenerator('Hello World!');

print_r($fuzzyTerms);

output: 

Array
(
    [0] => eHllo oWrld!
    [1] => eHllo Wrold!
    [2] => eHllo Wolrd!
    [3] => eHllo Wordl!
    [4] => eHllo Worl!d
    [5] => Hlelo oWrld!
    [6] => Hlelo Wrold!
    [7] => Hlelo Wolrd!
    [8] => Hlelo Wordl!
    [9] => Hlelo Worl!d
    [10] => Hello oWrld!
    [11] => Hello Wrold!
    [12] => Hello Wolrd!
    [13] => Hello Wordl!
    [14] => Hello Worl!d
    [15] => Helol oWrld!
    [16] => Helol Wrold!
    [17] => Helol Wolrd!
    [18] => Helol Wordl!
    [19] => Helol Worl!d
    [20] => ello orld!
    [21] => ello Wrld!
    [22] => ello Wold!
    [23] => ello Word!
    [24] => ello Worl!
    [25] => ello World
    [26] => Hllo orld!
    [27] => Hllo Wrld!
    [28] => Hllo Wold!
    [29] => Hllo Word!
    [30] => Hllo Worl!
    [31] => Hllo World
    [32] => Helo orld!
    [33] => Helo Wrld!
    [34] => Helo Wold!
    [35] => Helo Word!
    [36] => Helo Worl!
    [37] => Helo World
    [38] => Helo orld!
    [39] => Helo Wrld!
    [40] => Helo Wold!
    [41] => Helo Word!
    [42] => Helo Worl!
    [43] => Helo World
    [44] => Hell orld!
    [45] => Hell Wrld!
    [46] => Hell Wold!
    [47] => Hell Word!
    [48] => Hell Worl!
    [49] => Hell World
    [50] => _ello _orld!
    [51] => _ello W_rld!
    [52] => _ello Wo_ld!
    [53] => _ello Wor_d!
    [54] => _ello Worl_!
    [55] => _ello World_
    [56] => H_llo _orld!
    [57] => H_llo W_rld!
    [58] => H_llo Wo_ld!
    [59] => H_llo Wor_d!
    [60] => H_llo Worl_!
    [61] => H_llo World_
    [62] => He_lo _orld!
    [63] => He_lo W_rld!
    [64] => He_lo Wo_ld!
    [65] => He_lo Wor_d!
    [66] => He_lo Worl_!
    [67] => He_lo World_
    [68] => Hel_o _orld!
    [69] => Hel_o W_rld!
    [70] => Hel_o Wo_ld!
    [71] => Hel_o Wor_d!
    [72] => Hel_o Worl_!
    [73] => Hel_o World_
    [74] => Hell_ _orld!
    [75] => Hell_ W_rld!
    [76] => Hell_ Wo_ld!
    [77] => Hell_ Wor_d!
    [78] => Hell_ Worl_!
    [79] => Hell_ World_
    [80] => _Hello _World!
    [81] => _Hello W_orld!
    [82] => _Hello Wo_rld!
    [83] => _Hello Wor_ld!
    [84] => _Hello Worl_d!
    [85] => _Hello World_!
    [86] => _Hello World!_
    [87] => H_ello _World!
    [88] => H_ello W_orld!
    [89] => H_ello Wo_rld!
    [90] => H_ello Wor_ld!
    [91] => H_ello Worl_d!
    [92] => H_ello World_!
    [93] => H_ello World!_
    [94] => He_llo _World!
    [95] => He_llo W_orld!
    [96] => He_llo Wo_rld!
    [97] => He_llo Wor_ld!
    [98] => He_llo Worl_d!
    [99] => He_llo World_!
    [100] => He_llo World!_
    [101] => Hel_lo _World!
    [102] => Hel_lo W_orld!
    [103] => Hel_lo Wo_rld!
    [104] => Hel_lo Wor_ld!
    [105] => Hel_lo Worl_d!
    [106] => Hel_lo World_!
    [107] => Hel_lo World!_
    [108] => Hell_o _World!
    [109] => Hell_o W_orld!
    [110] => Hell_o Wo_rld!
    [111] => Hell_o Wor_ld!
    [112] => Hell_o Worl_d!
    [113] => Hell_o World_!
    [114] => Hell_o World!_
    [115] => Hello_ _World!
    [116] => Hello_ W_orld!
    [117] => Hello_ Wo_rld!
    [118] => Hello_ Wor_ld!
    [119] => Hello_ Worl_d!
    [120] => Hello_ World_!
    [121] => Hello_ World!_
)

use $fuzzyTerms for your DB query.
