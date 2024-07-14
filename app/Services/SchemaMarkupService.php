<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Blog;
class SchemaMarkupService
{
    public function generateProductSchema(Product $product)
    {
        return [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $product->name,
            "image" => url('images/' . $product->image), // Assuming you store images in the 'public/images' folder
            "description" => $product->description,
            "sku" => $product->sku,
            "brand" => [
                "@type" => "Brand",
                "name" => "welox pharma" // Assuming there is a related 'brand' model
            ],
            // Add more fields as necessary
        ];
    }
    public function generateBlogPostSchema(Blog $post)
    {
        return [
            "@context" => "https://schema.org",
            "@type" => "BlogPosting",
            "headline" => $post->title,
            "image" => url('images/' . $post->image), // Update path as needed
            "author" => [
                "@type" => "Person",
                "name" => $post->name // Assuming a related 'author' model
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => "Your Site Name",
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => url('path/to/your/logo.png') // Update logo path
                ]
            ],
            "datePublished" => $post->created_at->toIso8601String(),
            "dateModified" => $post->updated_at->toIso8601String(),
            "description" => $post->excerpt, // Or a short description
            // Add more properties as necessary
        ];
    }

    // Add more methods for other types of schemas
}