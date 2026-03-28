<?php


$orders = [

    [
        'id' => 1,
        'products' => [
            [
                'id' => 168,
                'title' => 'Charger SXT RWD',
                'price' => 32999.99,
                'quantity' => 3,
                'total' => 98999.97,
                'discountPercentage' => 13.39,
                'discountedTotal' => 85743.87,
                'thumbnail' => 'https://cdn.dummyjson.com/products/images/vehicle/Charger%20SXT%20RWD/thumbnail.png'
            ],
            [
                'id' => 78,
                'title' => 'Apple MacBook Pro 14 Inch Space Grey',
                'price' => 1999.99,
                'quantity' => 2,
                'total' => 3999.98,
                'discountPercentage' => 18.52,
                'discountedTotal' => 3259.18,
                'thumbnail' => 'https://cdn.dummyjson.com/products/images/laptops/Apple%20MacBook%20Pro%2014%20Inch%20Space%20Grey/thumbnail.png'
            ],
            [
                'id' => 183,
                'title' => 'Green Oval Earring',
                'price' => 24.99,
                'quantity' => 5,
                'total' => 124.95,
                'discountPercentage' => 6.28,
                'discountedTotal' => 117.1,
                'thumbnail' => 'https://cdn.dummyjson.com/products/images/womens-jewellery/Green%20Oval%20Earring/thumbnail.png'
            ],
            [
                'id' => 100,
                'title' => 'Apple Airpods',
                'price' => 129.99,
                'quantity' => 5,
                'total' => 649.95,
                'discountPercentage' => 12.84,
                'discountedTotal' => 566.5,
                'thumbnail' => 'https://cdn.dummyjson.com/products/images/mobile-accessories/Apple%20Airpods/thumbnail.png'
            ]
        ],
        'total' => 103774.85,
        'discountedTotal' => 89686.65,
        'userId' => 33,
        'totalProducts' => 4,
        'totalQuantity' => 15
    ],
    [
        'id' => 2,
        'products' => [
            [
                'id' => 144,
                'title' => 'Cricket Helmet',
                'price' => 44.99,
                'quantity' => 4,
                'total' => 179.96,
                'discountPercentage' => 11.47,
                'discountedTotal' => 159.32,
                'thumbnail' => 'https://cdn.dummyjson.com/products/images/sports-accessories/Cricket%20Helmet/thumbnail.png'
            ],
            [
                'id' => 124,
                'title' => 'iPhone X',
                'price' => 899.99,
                'quantity' => 4,
                'total' => 3599.96,
                'discountPercentage' => 8.03,
                'discountedTotal' => 3310.88,
                'thumbnail' => 'https://cdn.dummyjson.com/products/images/smartphones/iPhone%20X/thumbnail.png'
            ],
            [
                'id' => 148,
                'title' => 'Golf Ball',
                'price' => 9.99,
                'quantity' => 4,
                'total' => 39.96,
                'discountPercentage' => 11.24,
                'discountedTotal' => 35.47,
                'thumbnail' => 'https://cdn.dummyjson.com/products/images/sports-accessories/Golf%20Ball/thumbnail.png'
            ],
            [
                'id' => 122,
                'title' => 'iPhone 6',
                'price' => 299.99,
                'quantity' => 3,
                'total' => 899.97,
                'discountPercentage' => 19.64,
                'discountedTotal' => 723.22,
                'thumbnail' => 'https://cdn.dummyjson.com/products/images/smartphones/iPhone%206/thumbnail.png'
            ],
            [
                'id' => 110,
                'title' => 'Selfie Lamp with iPhone',
                'price' => 14.99,
                'quantity' => 5,
                'total' => 74.95,
                'discountPercentage' => 19.87,
                'discountedTotal' => 60.06,
                'thumbnail' => 'https://cdn.dummyjson.com/products/images/mobile-accessories/Selfie%20Lamp%20with%20iPhone/thumbnail.png'
            ]
        ],
        'total' => 4794.8,
        'discountedTotal' => 4288.95,
        'userId' => 142,
        'totalProducts' => 5,
        'totalQuantity' => 20
    ],];




$recipes = [
    [
        'id' => 1,
        'name' => 'Classic Margherita Pizza',
        'ingredients' => ['Pizza dough', 'Tomato sauce', 'Fresh mozzarella cheese', 'Fresh basil leaves', 'Olive oil', 'Salt and pepper to taste'],
        'instructions' => ['Preheat the oven to 475°F (245°C).', 'Roll out the pizza dough and spread tomato sauce evenly.', 'Top with slices of fresh mozzarella and fresh basil leaves.', 'Drizzle with olive oil and season with salt and pepper.', 'Bake in the preheated oven for 12-15 minutes or until the crust is golden brown.', 'Slice and serve hot.'],
        'prepTimeMinutes' => 20,
        'cookTimeMinutes' => 15,
        'servings' => 4,
        'difficulty' => 'Easy',
        'cuisine' => 'Italian',
        'caloriesPerServing' => 300,
        'tags' => ['Pizza', 'Italian'],
        'userId' => 166,
        'image' => 'https://cdn.dummyjson.com/recipe-images/1.webp',
        'rating' => 4.6,
        'reviewCount' => 98,
        'mealType' => ['Dinner']
    ],
    [
        'id' => 2,
        'name' => 'Vegetarian Stir-Fry',
        'ingredients' => ['Tofu, cubed', 'Broccoli florets', 'Carrots, sliced', 'Bell peppers, sliced', 'Soy sauce', 'Ginger, minced', 'Garlic, minced', 'Sesame oil', 'Cooked rice for serving'],
        'instructions' => ['In a wok, heat sesame oil over medium-high heat.', 'Add minced ginger and garlic, sauté until fragrant.', 'Add cubed tofu and stir-fry until golden brown.', 'Add broccoli, carrots, and bell peppers. Cook until vegetables are tender-crisp.', 'Pour soy sauce over the stir-fry and toss to combine.', 'Serve over cooked rice.'],
        'prepTimeMinutes' => 15,
        'cookTimeMinutes' => 20,
        'servings' => 3,
        'difficulty' => 'Medium',
        'cuisine' => 'Asian',
        'caloriesPerServing' => 250,
        'tags' => ['Vegetarian', 'Stir-fry', 'Asian'],
        'userId' => 143,
        'image' => 'https://cdn.dummyjson.com/recipe-images/2.webp',
        'rating' => 4.7,
        'reviewCount' => 26,
        'mealType' => ['Lunch']
    ],
    [
        'id' => 3,
        'name' => 'Chocolate Chip Cookies',
        'ingredients' => ['All-purpose flour', 'Butter, softened', 'Brown sugar', 'White sugar', 'Eggs', 'Vanilla extract', 'Baking soda', 'Salt', 'Chocolate chips'],
        'instructions' => ['Preheat the oven to 350°F (175°C).', 'In a bowl, cream together softened butter, brown sugar, and white sugar.', 'Beat in eggs one at a time, then stir in vanilla extract.', 'Combine flour, baking soda, and salt. Gradually add to the wet ingredients.', 'Fold in chocolate chips.', 'Drop rounded tablespoons of dough onto ungreased baking sheets.', 'Bake for 10-12 minutes or until edges are golden brown.', 'Allow cookies to cool on the baking sheet for a few minutes before transferring to a wire rack.'],
        'prepTimeMinutes' => 15,
        'cookTimeMinutes' => 10,
        'servings' => 24,
        'difficulty' => 'Easy',
        'cuisine' => 'American',
        'caloriesPerServing' => 150,
        'tags' => ['Cookies', 'Dessert', 'Baking'],
        'userId' => 34,
        'image' => 'https://cdn.dummyjson.com/recipe-images/3.webp',
        'rating' => 4.9,
        'reviewCount' => 13,
        'mealType' => ['Snack', 'Dessert']
    ],
  
];
$posts = [
    [
        'id' => 1,
        'title' => 'His mother had always taught him',
        'body' => 'His mother had always taught him not to ever think of himself as better than others. He\'d tried to live by this motto. He never looked down on those who were less fortunate or who had less money than him. But the stupidity of the group of people he was talking to made him change his mind.',
        'tags' => ['history', 'american', 'crime'],
        'reactions' => [
            'likes' => 192,
            'dislikes' => 25
        ],
        'views' => 305,
        'userId' => 121
    ],
    [
        'id' => 2,
        'title' => 'He was an expert but not in a discipline',
        'body' => 'He was an expert but not in a discipline that anyone could fully appreciate. He knew how to hold the cone just right so that the soft server ice-cream fell into it at the precise angle to form a perfect cone each and every time. It had taken years to perfect and he could now do it without even putting any thought behind it.',
        'tags' => ['french', 'fiction', 'english'],
        'reactions' => [
            'likes' => 859,
            'dislikes' => 32
        ],
        'views' => 4884,
        'userId' => 91
    ],
    [
        'id' => 3,
        'title' => 'Dave watched as the forest burned up on the hill.',
        'body' => 'Dave watched as the forest burned up on the hill, only a few miles from her house. The car had been hastily packed and Marta was inside trying to round up the last of the pets. Dave went through his mental list of the most important papers and documents that they couldn\'t leave behind. He scolded himself for not having prepared these better in advance and hoped that he had remembered everything that was needed. He continued to wait for Marta to appear with the pets, but she still was nowhere to be seen.',
        'tags' => ['magical', 'history', 'french'],
        'reactions' => [
            'likes' => 1448,
            'dislikes' => 39
        ],
        'views' => 4152,
        'userId' => 16
    ],
   

];

$comments = [
    [
        'id' => 1,
        'body' => 'This is some awesome thinking!',
        'postId' => 242,
        'likes' => 3,
        'user' => [
            'id' => 105,
            'username' => 'emmac',
            'fullName' => 'Emma Wilson'
        ]
    ],
    [
        'id' => 2,
        'body' => 'What terrific math skills you\'re showing!',
        'postId' => 46,
        'likes' => 4,
        'user' => [
            'id' => 183,
            'username' => 'cameronp',
            'fullName' => 'Cameron Perez'
        ]
    ],
    [
        'id' => 3,
        'body' => 'You are an amazing writer!',
        'postId' => 235,
        'likes' => 2,
        'user' => [
            'id' => 1,
            'username' => 'emilys',
            'fullName' => 'Emily Johnson'
        ]
    ],
    [
        'id' => 4,
        'body' => 'Wow! You have improved so much!',
        'postId' => 31,
        'likes' => 1,
        'user' => [
            'id' => 89,
            'username' => 'braydenf',
            'fullName' => 'Brayden Fleming'
        ]
    ],
    [
        'id' => 5,
        'body' => 'Nice idea!',
        'postId' => 212,
        'likes' => 1,
        'user' => [
            'id' => 149,
            'username' => 'wyattp',
            'fullName' => 'Wyatt Perry'
        ]
    ],
    [
        'id' => 6,
        'body' => 'You are showing excellent understanding!',
        'postId' => 184,
        'likes' => 5,
        'user' => [
            'id' => 110,
            'username' => 'danielt',
            'fullName' => 'Daniel Taylor'
        ]
    ],
    [
        'id' => 7,
        'body' => 'This is clear, concise, and complete!',
        'postId' => 172,
        'likes' => 1,
        'user' => [
            'id' => 4,
            'username' => 'jamesd',
            'fullName' => 'James Davis'
        ]
    ],
    [
        'id' => 8,
        'body' => 'What a powerful argument!',
        'postId' => 233,
        'likes' => 0,
        'user' => [
            'id' => 145,
            'username' => 'lukec',
            'fullName' => 'Luke Cooper'
        ]
    ],
    [
        'id' => 9,
        'body' => 'I knew you could do it!',
        'postId' => 207,
        'likes' => 3,
        'user' => [
            'id' => 207,
            'username' => 'jaces',
            'fullName' => 'Jace Smith'
        ]
    ],
    [
        'id' => 10,
        'body' => 'Wonderful ideas!',
        'postId' => 87,
        'likes' => 0,
        'user' => [
            'id' => 86,
            'username' => 'noram',
            'fullName' => 'Nora Mills'
        ]
    ],
    [
        'id' => 11,
        'body' => 'It was a pleasure to grade this!',
        'postId' => 156,
        'likes' => 8,
        'user' => [
            'id' => 162,
            'username' => 'mateob',
            'fullName' => 'Mateo Bennett'
        ]
    ],
    [
        'id' => 12,
        'body' => 'Keep up the incredible work!',
        'postId' => 119,
        'likes' => 10,
        'user' => [
            'id' => 90,
            'username' => 'scarlettb',
            'fullName' => 'Scarlett Bowman'
        ]
    ],
    [
        'id' => 13,
        'body' => 'My goodness, how impressive!',
        'postId' => 108,
        'likes' => 10,
        'user' => [
            'id' => 87,
            'username' => 'hunterg',
            'fullName' => 'Hunter Gordon'
        ]
    ],
    [
        'id' => 14,
        'body' => 'You\'re showing inventive ideas!',
        'postId' => 20,
        'likes' => 8,
        'user' => [
            'id' => 77,
            'username' => 'jonathanp',
            'fullName' => 'Jonathan Pierce'
        ]
    ],
    [
        'id' => 15,
        'body' => 'You\'ve shown so much growth!',
        'postId' => 6,
        'likes' => 2,
        'user' => [
            'id' => 17,
            'username' => 'evelyns',
            'fullName' => 'Evelyn Sanchez'
        ]
    ],
    [
        'id' => 16,
        'body' => 'Interesting thoughts!',
        'postId' => 14,
        'likes' => 5,
        'user' => [
            'id' => 199,
            'username' => 'viviang',
            'fullName' => 'Vivian Carter'
        ]
    ],
    [
        'id' => 17,
        'body' => 'I love your neat work!',
        'postId' => 240,
        'likes' => 7,
        'user' => [
            'id' => 155,
            'username' => 'nicholase',
            'fullName' => 'Nicholas Edwards'
        ]
    ],
    [
        'id' => 18,
        'body' => 'Doesn\'t it feel good to do such great work?',
        'postId' => 227,
        'likes' => 6,
        'user' => [
            'id' => 134,
            'username' => 'noramx',
            'fullName' => 'Nora Russell'
        ]
    ],
    [
        'id' => 19,
        'body' => 'First-rate work!',
        'postId' => 245,
        'likes' => 1,
        'user' => [
            'id' => 203,
            'username' => 'novab',
            'fullName' => 'Nova Cooper'
        ]
    ],
    [
        'id' => 20,
        'body' => 'This is fascinating information!',
        'postId' => 176,
        'likes' => 4,
        'user' => [
            'id' => 39,
            'username' => 'lucasg',
            'fullName' => 'Lucas Gray'
        ]
    ],
    [
        'id' => 21,
        'body' => 'You inspire me!',
        'postId' => 229,
        'likes' => 0,
        'user' => [
            'id' => 113,
            'username' => 'miam',
            'fullName' => 'Mia Miller'
        ]
    ],
    [
        'id' => 22,
        'body' => 'This is right on target!',
        'postId' => 9,
        'likes' => 5,
        'user' => [
            'id' => 113,
            'username' => 'miam',
            'fullName' => 'Mia Miller'
        ]
    ],
    [
        'id' => 23,
        'body' => 'What an astounding observation!',
        'postId' => 33,
        'likes' => 1,
        'user' => [
            'id' => 155,
            'username' => 'nicholase',
            'fullName' => 'Nicholas Edwards'
        ]
    ],
    [
        'id' => 24,
        'body' => 'This is very well thought out!',
        'postId' => 121,
        'likes' => 1,
        'user' => [
            'id' => 169,
            'username' => 'jaxonb',
            'fullName' => 'Jaxon Barnes'
        ]
    ],
    [
        'id' => 25,
        'body' => 'I can tell you\'ve been practicing!',
        'postId' => 247,
        'likes' => 9,
        'user' => [
            'id' => 160,
            'username' => 'claires',
            'fullName' => 'Claire Foster'
        ]
    ],
    [
        'id' => 26,
        'body' => 'You\'ve come a long way!',
        'postId' => 79,
        'likes' => 7,
        'user' => [
            'id' => 59,
            'username' => 'ethanf',
            'fullName' => 'Ethan Fletcher'
        ]
    ],
    [
        'id' => 27,
        'body' => 'I can tell you\'ve been paying attention!',
        'postId' => 55,
        'likes' => 9,
        'user' => [
            'id' => 57,
            'username' => 'nathand',
            'fullName' => 'Nathan Dixon'
        ]
    ],
    [
        'id' => 28,
        'body' => 'Reading this made my day!',
        'postId' => 209,
        'likes' => 8,
        'user' => [
            'id' => 177,
            'username' => 'xavierw',
            'fullName' => 'Xavier Wright'
        ]
    ],
    [
        'id' => 29,
        'body' => 'This is very perceptive!',
        'postId' => 31,
        'likes' => 2,
        'user' => [
            'id' => 168,
            'username' => 'lunah',
            'fullName' => 'Luna Perez'
        ]
    ],
    [
        'id' => 30,
        'body' => 'What an accomplishment!',
        'postId' => 126,
        'likes' => 8,
        'user' => [
            'id' => 89,
            'username' => 'braydenf',
            'fullName' => 'Brayden Fleming'
        ]
    ]
];
$todos = [
    [
        'id' => 1,
        'todo' => 'Do something nice for someone you care about',
        'completed' => false,
        'userId' => 152
    ],
    [
        'id' => 2,
        'todo' => 'Memorize a poem',
        'completed' => true,
        'userId' => 13
    ],
    [
        'id' => 3,
        'todo' => 'Watch a classic movie',
        'completed' => true,
        'userId' => 68
    ],
    [
        'id' => 4,
        'todo' => 'Watch a documentary',
        'completed' => false,
        'userId' => 84
    ],
    [
        'id' => 5,
        'todo' => 'Invest in cryptocurrency',
        'completed' => false,
        'userId' => 163
    ],
    [
        'id' => 6,
        'todo' => 'Contribute code or a monetary donation to an open-source software project',
        'completed' => false,
        'userId' => 69
    ],
    [
        'id' => 7,
        'todo' => 'Solve a Rubik\'s cube',
        'completed' => true,
        'userId' => 76
    ],
    [
        'id' => 8,
        'todo' => 'Bake pastries for yourself and neighbor',
        'completed' => true,
        'userId' => 198
    ],
    [
        'id' => 9,
        'todo' => 'Go see a Broadway production',
        'completed' => false,
        'userId' => 7
    ],
    [
        'id' => 10,
        'todo' => 'Write a thank you letter to an influential person in your life',
        'completed' => true,
        'userId' => 9
    ],
    [
        'id' => 11,
        'todo' => 'Invite some friends over for a game night',
        'completed' => false,
        'userId' => 104
    ],
    [
        'id' => 12,
        'todo' => 'Have a football scrimmage with some friends',
        'completed' => false,
        'userId' => 32
    ],
    [
        'id' => 13,
        'todo' => 'Text a friend you haven\'t talked to in a long time',
        'completed' => true,
        'userId' => 2
    ],
    [
        'id' => 14,
        'todo' => 'Organize pantry',
        'completed' => false,
        'userId' => 46
    ],
    [
        'id' => 15,
        'todo' => 'Buy a new house decoration',
        'completed' => true,
        'userId' => 105
    ],
    [
        'id' => 16,
        'todo' => 'Plan a vacation you\'ve always wanted to take',
        'completed' => true,
        'userId' => 162
    ],
    [
        'id' => 17,
        'todo' => 'Clean out car',
        'completed' => false,
        'userId' => 71
    ],
    [
        'id' => 18,
        'todo' => 'Draw and color a Mandala',
        'completed' => true,
        'userId' => 6
    ],
    [
        'id' => 19,
        'todo' => 'Create a cookbook with favorite recipes',
        'completed' => true,
        'userId' => 53
    ],
    [
        'id' => 20,
        'todo' => 'Bake a pie with some friends',
        'completed' => false,
        'userId' => 162
    ],
    [
        'id' => 21,
        'todo' => 'Create a compost pile',
        'completed' => false,
        'userId' => 13
    ],
    [
        'id' => 22,
        'todo' => 'Take a hike at a local park',
        'completed' => true,
        'userId' => 37
    ],
    [
        'id' => 23,
        'todo' => 'Take a class at local community center that interests you',
        'completed' => true,
        'userId' => 65
    ],
    [
        'id' => 24,
        'todo' => 'Research a topic interested in',
        'completed' => true,
        'userId' => 130
    ],
    [
        'id' => 25,
        'todo' => 'Plan a trip to another country',
        'completed' => false,
        'userId' => 140
    ],
    [
        'id' => 26,
        'todo' => 'Improve touch typing',
        'completed' => false,
        'userId' => 178
    ],
    [
        'id' => 27,
        'todo' => 'Learn Express.js',
        'completed' => false,
        'userId' => 194
    ],
    [
        'id' => 28,
        'todo' => 'Learn calligraphy',
        'completed' => false,
        'userId' => 80
    ],
    [
        'id' => 29,
        'todo' => 'Have a photo session with some friends',
        'completed' => true,
        'userId' => 91
    ],
    [
        'id' => 30,
        'todo' => 'Go to the gym',
        'completed' => true,
        'userId' => 142
    ]
];
$quotes = [
    [
        'id' => 1,
        'quote' => 'Your heart is the size of an ocean. Go find yourself in its hidden depths.',
        'author' => 'Rumi'
    ],
    [
        'id' => 2,
        'quote' => 'The Bay of Bengal is hit frequently by cyclones. The months of November and May, in particular, are dangerous in this regard.',
        'author' => 'Abdul Kalam'
    ],
    [
        'id' => 3,
        'quote' => 'Thinking is the capital, Enterprise is the way, Hard Work is the solution.',
        'author' => 'Abdul Kalam'
    ],
    [
        'id' => 4,
        'quote' => 'If You Can\'T Make It Good, At Least Make It Look Good.',
        'author' => 'Bill Gates'
    ],
    [
        'id' => 5,
        'quote' => 'Heart be brave. If you cannot be brave, just go. Love\'s glory is not a small thing.',
        'author' => 'Rumi'
    ],
    [
        'id' => 6,
        'quote' => 'It is bad for a young man to sin; but it is worse for an old man to sin.',
        'author' => 'Abu Bakr (R.A)'
    ],
    [
        'id' => 7,
        'quote' => 'If You Are Out To Describe The Truth, Leave Elegance To The Tailor.',
        'author' => 'Albert Einstein'
    ],
    [
        'id' => 8,
        'quote' => 'O man you are busy working for the world, and the world is busy trying to turn you out.',
        'author' => 'Abu Bakr (R.A)'
    ],
    [
        'id' => 9,
        'quote' => 'While children are struggling to be unique, the world around them is trying all means to make them look like everybody else.',
        'author' => 'Abdul Kalam'
    ],
    [
        'id' => 10,
        'quote' => 'These Capitalists Generally Act Harmoniously And In Concert, To Fleece The People.',
        'author' => 'Abraham Lincoln'
    ],
    [
        'id' => 11,
        'quote' => 'I Don\'T Believe In Failure. It Is Not Failure If You Enjoyed The Process.',
        'author' => 'Oprah Winfrey'
    ],
    [
        'id' => 12,
        'quote' => 'Do not get elated at any victory, for all such victory is subject to the will of God.',
        'author' => 'Abu Bakr (R.A)'
    ],
    [
        'id' => 13,
        'quote' => 'Wear gratitude like a cloak and it will feed every corner of your life.',
        'author' => 'Rumi'
    ],
    [
        'id' => 14,
        'quote' => 'If you even dream of beating me you\'d better wake up and apologize.',
        'author' => 'Muhammad Ali'
    ],
    [
        'id' => 15,
        'quote' => 'I Will Praise Any Man That Will Praise Me.',
        'author' => 'William Shakespeare'
    ],
    [
        'id' => 16,
        'quote' => 'One Of The Greatest Diseases Is To Be Nobody To Anybody.',
        'author' => 'Mother Teresa'
    ],
    [
        'id' => 17,
        'quote' => 'I\'m so fast that last night I turned off the light switch in my hotel room and was in bed before the room was dark.',
        'author' => 'Muhammad Ali'
    ],
    [
        'id' => 18,
        'quote' => 'People Must Learn To Hate And If They Can Learn To Hate, They Can Be Taught To Love.',
        'author' => 'Nelson Mandela'
    ],
    [
        'id' => 19,
        'quote' => 'Everyone has been made for some particular work, and the desire for that work has been put in every heart.',
        'author' => 'Rumi'
    ],
    [
        'id' => 20,
        'quote' => 'The less of the World, the freer you live.',
        'author' => 'Umar ibn Al-Khattāb (R.A)'
    ],
    [
        'id' => 21,
        'quote' => 'Respond to every call that excites your spirit.',
        'author' => 'Rumi'
    ],
    [
        'id' => 22,
        'quote' => 'The Way To Get Started Is To Quit Talking And Begin Doing.',
        'author' => 'Walt Disney'
    ],
    [
        'id' => 23,
        'quote' => 'God Doesn\'T Require Us To Succeed, He Only Requires That You Try.',
        'author' => 'Mother Teresa'
    ],
    [
        'id' => 24,
        'quote' => 'Speak any language, Turkish, Greek, Persian, Arabic, but always speak with love.',
        'author' => 'Rumi'
    ],
    [
        'id' => 25,
        'quote' => 'Happiness comes towards those which believe in him.',
        'author' => 'Ali ibn Abi Talib (R.A)'
    ],
    [
        'id' => 26,
        'quote' => 'Knowledge is of two kinds: that which is absorbed and that which is heard. And that which is heard does not profit if it is not absorbed.',
        'author' => 'Ali ibn Abi Talib (R.A)'
    ],
    [
        'id' => 27,
        'quote' => 'When I am silent, I have thunder hidden inside.',
        'author' => 'Rumi'
    ],
    [
        'id' => 28,
        'quote' => 'Technological Progress Is Like An Axe In The Hands Of A Pathological Criminal.',
        'author' => 'Albert Einstein'
    ],
    [
        'id' => 29,
        'quote' => 'No One Would Choose A Friendless Existence On Condition Of Having All The Other Things In The World.',
        'author' => 'Aristotle'
    ],
    [
        'id' => 30,
        'quote' => 'Life is a gamble. You can get hurt, but people die in plane crashes, lose their arms and legs in car accidents; people die every day. Same with fighters: some die, some get hurt, some go on. You just don\'t let yourself believe it will happen to you.',
        'author' => 'Muhammad Ali'
    ]
];

echo '<Hr><h1> orders</h1> ';
$orders_json=json_encode($orders);
echo $orders_json;

echo '<Hr><h1> recipes</h1> ';    
$recipes_json = json_encode($recipes);
echo $recipes_json;

echo '<Hr><h1> posts</h1> ';     
$posts_json = json_encode($posts);
echo $posts_json;

echo '<Hr><h1> comments</h1> ';  
$comments_json = json_encode($comments);
echo $comments_json;

echo '<Hr><h1> todos</h1> ';  
$todos_json = json_encode($todos);
echo $todos_json;

echo '<Hr><h1> quotes</h1> ';  
$quotes_json = json_encode($quotes);
echo $quotes_json;
