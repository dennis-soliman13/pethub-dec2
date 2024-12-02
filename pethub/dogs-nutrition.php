<?php
include 'connection.php'; // Assuming the connection to the database
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=bookmark" />
  <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="general.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="contents.css">
  <title>Dogs Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
   $(document).ready(function() {
  // Bookmark click event
  $(".bookmark-icon").click(function() {
    const sectionId = $(this).attr("name");  // Get the section name
    const sectionTitle = $("#" + sectionId + " h2").text();  // Get the title (h2 text)
    const sectionContent = $("#" + sectionId + " p").text();  // Get the content (p text)

    console.log(sectionTitle, sectionContent); // For debugging, check in browser console

    // Set the category based on the page
    const category = "Dogs";  // Change this dynamically if on a different page
    console.log(sectionTitle, sectionContent)
    // AJAX call to save the bookmark
    $.ajax({
      url: "save_bookmark.php", // PHP file to save the bookmark
      type: "POST",
      data: {
        title: sectionTitle,
        content: sectionContent,
        category: category  // Pass the category (e.g., "Cats")
      },
      success: function(response) {
        alert(response); // Show a confirmation message
      },
      error: function(xhr, status, error) {
        console.error("AJAX Error: " + error); // For debugging in case of error
      }
    });
  });
});

  </script>
</head>
<body>
<div class="navbar">
  <div class="left-section">
    <div class="logo-icon">
      <img class="logo-image" src="/pethub/img/logo2.png">
    </div>
    <div class="infurrmation-hub">    
      <h1>INFURRMATION HUB</h1>
    </div>
  </div>
  <div class="middle-section">
    <!-- Main Dropdown for Exotic Pets -->
    <div class="dropdown">
      <button class="button-style" id="button-spacing">DOMESTIC PETS<div class="chevron-down"><i class="fa fa-chevron-down"></i></div></button>
      <div class="dropdown-content">
          <!-- Dogs Dropdown -->
          <div class="nested-dropdown">
              <a href="dogs.php#grooming">DOGS</a>
              <div class="nested-dropdown-content">
                  <a href="dogs.php#grooming">Grooming</a>
                  <a href="dogs-environment.php#environment">Proper Environment/Caging</a>
                  <a href="dogs-nutrition.php#nutrition">Nutrition</a>
                  <a href="dogs-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="dogs.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Cats Dropdown -->
          <div class="nested-dropdown">
              <a href="cats.php#grooming">CATS</a>
              <div class="nested-dropdown-content">
                  <a href="cats.php#grooming">Grooming</a>
                  <a href="cats-environment.php#environment">Proper Environment/Caging</a>
                  <a href="cats-nutritionphp#nutrition">Nutrition</a>
                  <a href="cats-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="cats.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Birds Dropdown -->
          <div class="nested-dropdown">
              <a href="birds.php#grooming">BIRDS</a>
              <div class="nested-dropdown-content">
                  <a href="birds.php#grooming">Grooming</a>
                  <a href="birds-environment.php#environment">Proper Environment/Caging</a>
                  <a href="birds-nutrition.php#nutrition">Nutrition</a>
                  <a href="birds-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="birds.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Fishes Dropdown -->
          <div class="nested-dropdown">
              <a href="fishes.php#grooming">FISHES</a>
              <div class="nested-dropdown-content">
                  <a href="fishes-grooming.php#grooming">Grooming</a>
                  <a href="fishes-environment.php#environment">Proper Environment/Caging</a>
                  <a href="fishes-nutrition.php#nutrition">Nutrition</a>
                  <a href="fishes-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="fishes.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Rabbit Dropdown -->
          <div class="nested-dropdown">
              <a href="rabbit.php#grooming">RABBIT</a>
              <div class="nested-dropdown-content">
                  <a href="rabbit-grooming.php#grooming">Grooming</a>
                  <a href="rabbit-environment.php#environment">Proper Environment/Caging</a>
                  <a href="rabbit-nutrition.php#nutrition">Nutrition</a>
                  <a href="rabbit-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="rabbit.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Rodents Dropdown -->
          <div class="nested-dropdown">
              <a href="rodents.php#grooming">RODENTS</a>
              <div class="nested-dropdown-content">
                  <a href="rodents-grooming.php#grooming">Grooming</a>
                  <a href="rodents-environment.php#environment">Proper Environment/Caging</a>
                  <a href="rodents-nutrition.php#nutrition">Nutrition</a>
                  <a href="rodents-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="rodents.php#products">Recommended Products</a>
              </div>
          </div>
      </div>
    </div>
    <!-- Main Dropdown for Exotic Pets -->
    <div class="dropdown">
      <button class="button-style">EXOTIC PETS <div class="chevron-down"><i class="fa fa-chevron-down"></i></div></button>
      <div class="dropdown-content">
          <!-- Ball Python Dropdown -->
          <div class="nested-dropdown">
              <a href="ballpython.php#grooming">Snake (Ball Python)</a>
              <div class="nested-dropdown-content">
                  <a href="ballpython.php#grooming">Grooming</a>
                  <a href="ballpython.php#environment">Proper Environment/Caging</a>
                  <a href="ballpython.php#nutrition">Nutrition</a>
                  <a href="ballpython.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="ballpython.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Tarantulas Dropdown -->
          <div class="nested-dropdown">
              <a href="tarantulas.php#grooming">Tarantulas</a>
              <div class="nested-dropdown-content">
                  <a href="tarantulas.php#grooming">Grooming</a>
                  <a href="tarantulas.php#environment">Proper Environment/Caging</a>
                  <a href="tarantulas.php#nutrition">Nutrition</a>
                  <a href="tarantulas.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="tarantulas.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Domestic Pig Dropdown -->
          <div class="nested-dropdown">
              <a href="domesticpig.php#grooming">Domestic Pig</a>
              <div class="nested-dropdown-content">
                  <a href="domesticpig.php#grooming">Grooming</a>
                  <a href="domesticpig.php#environment">Proper Environment/Caging</a>
                  <a href="domesticpig.php#nutrition">Nutrition</a>
                  <a href="domesticpig.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="domesticpig.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Turtle Dropdown -->
          <div class="nested-dropdown">
              <a href="turtle.php#grooming">Turtle</a>
              <div class="nested-dropdown-content">
                  <a href="turtle.php#grooming">Grooming</a>
                  <a href="turtle.php#environment">Proper Environment/Caging</a>
                  <a href="turtle.php#nutrition">Nutrition</a>
                  <a href="turtle.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="turtle.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Hedgehogs Dropdown -->
          <div class="nested-dropdown">
              <a href="hedgehogs.php#grooming">Hedgehogs</a>
              <div class="nested-dropdown-content">
                  <a href="hedgehogs.php#grooming">Grooming</a>
                  <a href="hedgehogs.php#environment">Proper Environment/Caging</a>
                  <a href="hedgehogs.php#nutrition">Nutrition</a>
                  <a href="hedgehogs.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="hedgehogs.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Bearded Dragons Dropdown -->
          <div class="nested-dropdown">
              <a href="bearded_dragons.php#grooming">Bearded Dragons</a>
              <div class="nested-dropdown-content">
                  <a href="bearded_dragons.php#grooming">Grooming</a>
                  <a href="bearded_dragons.php#environment">Proper Environment/Caging</a>
                  <a href="bearded_dragons.php#nutrition">Nutrition</a>
                  <a href="bearded_dragons.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="bearded_dragons.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Axolotl Dropdown -->
          <div class="nested-dropdown">
              <a href="axolotl.php#grooming">Axolotl</a>
              <div class="nested-dropdown-content">
                  <a href="axolotl.php#grooming">Grooming</a>
                  <a href="axolotl.php#environment">Proper Environment/Caging</a>
                  <a href="axolotl.php#nutrition">Nutrition</a>
                  <a href="axolotl.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="axolotl.php#products">Recommended Products</a>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="right-section">
    <div class="search-section">
      <input class="search-bar" type="text" name="search" placeholder="Search">
      <img class="search-icon" src="/pethub/img/search.png" alt="search-icon">
    </div>
    <div class="profile-section">
      <form method="POST" action="index.php">
        <div class="profile-picture-section">
        <a href="index.php"><img class="profile-img" src="profile-picture-dog.png"></a>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- main -->
<div class="main">
  <div class="go-back-text">
    
      <a class="back-text" href="#">Back to Dog Care</a>
    
  </div>
  <div class="thumbnail-container">
    <img id="thumbnail" src="/pethub/img/thumbnail.jpg" alt="">
    <div class="corner"></div>
  </div>
  <div class="content">
    <div class="header-text">
      <h1 class="h1-text">PROPER NUTRITION FOR DOGS</h1>
    </div>
    <div class="line-bar">
      <hr>
    </div>
    <div class="paragraph-section">
      <div class="paragraph">
        <h2>Since dogs are carnivores, doesn’t this mean that they need to eat a diet that is meat based?</h2>
        <p>The dog is a species in the biological order Carnivora, which includes a vast group of mammalian animals with similar tooth structures. The dietary requirements of animals in this order vary. Some members of this group have an absolute need for meat in their diet (known as obligate or true carnivores), whilst others can meet their nutritional needs by eating plant material (herbivores) or a combination of meat and plants (omnivores).</p>
        <h3>I have heard that dogs should only eat raw foods and that dogs cannot properly digest cooked foods. Is this true?</h3>
        <p>Over thousands of years, domesticated dogs have adapted to eating diets prepared by humans, including cooked foods. Cooked complex carbohydrates are easier for dogs to digest compared to raw ones. However, feeding raw diets can pose risks to both dogs and household members, particularly young children or those with weakened immune systems.</p>
        <h3>What are the nutritional requirements for dogs?</h3>
        <p>The six basic nutrients are water, proteins, lipids, carbs, minerals, and vitamins. These important nutrients are required for the dog's regular diet and play a role in all of the body's basic activities. Many nutrients have minimum dietary requirements. The maximum tolerable dosage of various nutrients is known, and toxicity outcomes have been determined. What is less clear is what happens over time with marginal deficits or excesses.</p>

        <p>The Association of American Feed Control Officials has created nutritional standards. AAFCO guidelines provide a fundamental framework for the nutritional composition of commercial pet meals. Make sure your dog's food meets AAFCO guidelines.</p>
        <p>
        Remember, these are general guidelines, and your dog's specific needs may vary based on their health. Consult your veterinarian for personalized advice on the nutrients your dog may require.</p>
        <h3>HOW MUCH SHOULD I FEED?</h3>
        <p>The optimal way for estimating how many calories to feed your dog is to estimate his or her lean weight and feed accordingly. Unfortunately, this involves regular monitoring (and weighing), which is not always feasible.</p>
        <p>Your veterinarian can determine how many calories your dog needs per day depending on his lifestyle and body condition score. The typical method for determining the energy requirements of the average adult dog who lives inside your home, gets light daily exercise, and is spayed or neutered is:</p>
        <h3>30 times weight in kg (or pounds divided by 2.2) plus 70 equals daily calorie needs.</h3>
        <p>Be mindful that few of our pets are "average," thus this formula is only a starting point. Most dogs will require less calories per day, but a handful will require significantly more.</p>
        <p>Your dog's daily calorie intake should account for meals, snacks, and treats. If weight loss is necessary, your veterinarian may suggest reducing caloric intake to 70–90% of the amount needed for weight maintenance.</p>
        <h3>HOW OFTEN SHOULD I FEED MY DOG?</h3>

        <p>Dogs' biological development as hunters has resulted in particular digestive and gastrointestinal adaptations that allow them to consume a huge meal followed by up to several days of fasting. However, for most companion dogs, feeding once or twice a day is advised. Many dogs will benefit from eating equivalent portions two to three times per day. For additional information on feeding schedules and mealtimes, see the handout "Feeding Times and Frequency for Your Dog".</p>
        <p>Regardless of the feeding schedule you set, do not allow your dog to exercise hard after a heavy meal, especially if it eats quickly. This will assist to reduce symptoms of bloating, intestinal blockage, and other significant digestive diseases. Be sure your dog has access to fresh, clean water at all times.</p>

        <h3>WHAT IS MEANT BY LIFE-STAGE NUTRITION?</h3>
        <p>Dogs' nutritional demands change throughout their lifespan, thus providing a diet designed for all life stages is not always acceptable. An all-purpose dog food may not include enough nutrients to suit the nutritional requirements of a growing puppy, pregnant or nursing mother. In contrast, an older or sedentary dog may receive too many nutrients from this all-purpose food. Respected nutritionists now propose feeding your dog based on its stage of life (puppy, teenager, pregnant, adult, senior) to preserve your dog's overall health and well-being and to improve both the quality and quantity of his or her lives. The AAFCO Statement can be found on your dog's food label.</p>

        <ul>
          <li>
          <strong>Life-stage Feeding for puppies</strong> - Proper feeding based on life stage is crucial for puppies. They need frequent meals early on due to rapid growth and small stomachs—4–6 meals a day at 6–8 weeks, reducing to 2–3 meals by 6 months as they approach 75% of adult size. High-quality puppy food is essential for their nutritional needs and development, with most puppies transitioning to adult food by 12 months. Large- and giant-breed puppies, prone to growth-related issues like joint dysplasia, require specially formulated diets to manage protein and calcium levels and prevent rapid bone growth. Your veterinarian might recommend a transitional diet during adolescence. Additionally, most puppies lose the ability to digest lactose after weaning.
          </li>
          <li>
          <strong>Life-stage Feeding for older dogs</strong> - Older dogs, particularly those over the age of 7, will benefit from a diet tailored to their specific requirements. Senior dog diets often have less calories, more protein, less sodium, and fewer carbohydrates. Many also include prebiotics or probiotics to support healthy gut microbial populations, omega-3 fatty acids and other antioxidants to fight inflammation, and glucosamine to boost joint health. Ask your veterinarian what food is best for your elderly dog. Some senior diets will incorporate medium chain triglycerides to assist slow down brain changes that can contribute to senility symptoms.
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="grid-container">
  <div class="latest-articles"><h2>Latest Articles</h2></div>
  <div class="grid-section">
    <div class="left-grid">
      <div class="top-picture-grid">
        <img class="grid-pictures"src="/pethub/img/image.png">
      </div>
      <div class="bottom-description-grid">
      <h2>Dos and Dont's for Dogs</h2>
      <span class="span-text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo est quod itaque minus unde nisi iure ea ducimus, totam quasi maiores sapiente inventore dicta autem magni aliquam optio laborum blanditiis!
        </span>
      </div>
    </div>
    <div class="middle-grid">
      <div class="top-picture-grid">
        <img class="grid-pictures"src="/pethub/img/image1.png">
        </div>
        <div class="bottom-description-grid">
          <h2>Grooming for Dogs</h2>
          <span class="span-text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo est quod itaque minus unde nisi iure ea ducimus, totam quasi maiores sapiente inventore dicta autem magni aliquam optio laborum blanditiis!
          </span>
        </div>
      </div>
    <div class="right-grid">
      <div class="top-picture-grid">
        <img class="grid-pictures"src="/pethub/img/image2.png">
          </div>
          <div class="bottom-description-grid">
            <h2>Nutrition for Dogs</h2>
            <span class="span-text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo est quod itaque minus unde nisi iure ea ducimus, totam quasi maiores sapiente inventore dicta autem magni aliquam optio laborum blanditiis!
            </span>
          </div>
        </div>
    </div>
  </div>
  
</div>
<div class="footer">
  <div class="footer-content">
    <h3>About us</h3>
    <hr>
      <p>Dogs Grooming</p>
      <p>Dogs Nutrition</p>
      <p>Dogs Dos and Dont's</p>
      <p id="group-4-footer">(c) 2024 TSU, Group 4 WEBPROG </p>
  </div>
</div>
</body>
</html>

<!-- <span id="grooming-bookmark" name="grooming" class="material-symbols-outlined bookmark-icon" style="font-variation-settings: 'FILL' 0;">bookmark</span> -->