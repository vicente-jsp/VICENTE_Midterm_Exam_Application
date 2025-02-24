<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Define an array of restaurants with real names, images, and details
        $restaurants = [
            [
                'name' => 'The Cheesecake Factory',
                'cuisine' => 'American',
                'rating' => 4.6,
                'image' => 'https://images.unsplash.com/photo-1552566626-52f8b828add9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'description' => 'Famous for its extensive menu and delicious cheesecakes and coffee.',
                'items' => ['Original Cheesecake', 'Avocado Eggrolls', 'Chicken Madeira'],
            ],
            [
                'name' => 'Nobu',
                'cuisine' => 'Japanese',
                'rating' => 4.8,
                'image' => 'https://media.istockphoto.com/id/2164235865/photo/high-angle-view-of-sushi-and-sashimi-in-box-on-table.webp?a=1&b=1&s=612x612&w=0&k=20&c=iGHD315mgC50rrHYTQE5zZBKq51gcBWnyYoztH6THp8=',
                'description' => 'Luxurious Japanese cuisine with a modern twist and spices.',
                'items' => ['Black Cod Miso', 'Sushi Platter', 'Tempura'],
            ],
            [
                'name' => 'Pizzeria Bianco',
                'cuisine' => 'Italian',
                'rating' => 4.7,
                'image' => 'https://images.unsplash.com/photo-1590947132387-155cc02f3212?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'description' => 'Authentic wood-fired pizzas made with fresh ingredients.',
                'items' => ['Margherita Pizza', 'Marinara Pizza', 'Rosa Pizza'],
            ],
            [
                'name' => 'Gaggan',
                'cuisine' => 'Indian',
                'rating' => 4.9,
                'image' => 'https://images.unsplash.com/photo-1603894584373-5ac82b2ae398?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'description' => 'Progressive Indian cuisine with a creative and unique touch.',
                'items' => ['Lick It Up', 'Yogurt Explosion', 'Chocolate Chai'],
            ],
            [
                'name' => 'Le Bernardin',
                'cuisine' => 'French',
                'rating' => 4.9,
                'image' => 'https://media.istockphoto.com/id/1351513919/photo/seafood-dishes-such-as-grilled-shrimp-and-crab-and-seafood-sauce-it-consists-of-fresh-chili.webp?a=1&b=1&s=612x612&w=0&k=20&c=XguYc6TL3B9c2Lj7h3MeujUVKmSsMjtdPcM5g3IlkCM=',
                'description' => 'Elegant French seafood dishes in a refined and fixed setting.',
                'items' => ['Tuna Foie Gras', 'Lobster Risotto', 'Chocolate Ganache'],
            ],
            [
                'name' => 'Joe’s Stone Crab',
                'cuisine' => 'Seafood',
                'rating' => 4.5,
                'image' => 'https://images.unsplash.com/photo-1551504734-5ee1c4a1479b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'description' => 'Famous for its fresh stone crabs and seafood dishes.',
                'items' => ['Stone Crab Claws', 'Key Lime Pie', 'Fried Calamari'],
            ],
            [
                'name' => 'Katz’s Delicatessen',
                'cuisine' => 'American',
                'rating' => 4.4,
                'image' => 'https://images.unsplash.com/photo-1601924582970-9238bcb495d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'description' => 'Iconic New York deli known for its pastrami sandwiches.',
                'items' => ['Pastrami Sandwich', 'Matzo Ball Soup', 'Knish'],
            ],
            [
                'name' => 'El Celler de Can Roca',
                'cuisine' => 'Spanish',
                'rating' => 4.9,
                'image' => 'https://images.unsplash.com/photo-1559620192-032c4bc4674e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'description' => 'Innovative Spanish cuisine with a focus on Catalan flavors.',
                'items' => ['Charcoal-Grilled King Prawn', 'Iberian Suckling Pig', 'Caramelized Apple'],
            ],
            [
                'name' => 'Gordon Ramsay Burger',
                'cuisine' => 'American',
                'rating' => 4.7,
                'image' => 'https://images.unsplash.com/photo-1572802419224-296b0aeee0d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'description' => 'Gourmet burgers crafted by the world-renowned chef Gordon Ramsay.',
                'items' => ['Hell’s Kitchen Burger', 'Truffle Burger', 'Blue Cheese Burger'],
            ],
        ];

        // Pass the array to the view
        return view('welcome', compact('restaurants'));
    }
}
