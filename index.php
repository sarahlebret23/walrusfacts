<?php
/* function randomStringGenerator($length=100){
  $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  $strlen = strlen($chars);
  
  $random = "";
  for($i=0; $i< $length; $i++){
    $posn = rand(0, $strlen-1); //0,0

    $random .= $chars[$posn];
  }

  return $random;
} 

echo randomStringGenerator(10); */

$input = array(
  "There Inuktitut name is Aiviq.",  
  "Walrus can can live up to 40 years in the wild.",  
  "The worldwide population of the walrus is estimated at 250,000.",  
  "Orcas and polar bears are their only natural predators.",  
  "Walrus use their tusks to lift themselves on to sea ice and to FIGHT to establishing social dominance!", 
  "Walrus can withstand freezing temperatures as low as -35°C (-31°F).", 
  "They live in shallow water but dive deeper in search of food.", 
  "Walruses are typically a cinnamon brown colour, but they can turn white after diving or even pink when they are warm.", 
  "Both male and female walruses have tusks that grow continuously throughout their lives.", 
  "Walruses are very social, typically found in large shoreline herds or living together on moving pack ice.", 
  "Adult walruses eat between three to six percent of their body weight per day and prefer molluscs, especially clams.", 
  "The walrus uses their whiskers or vibrissae to find food.", 
  "About a month before giving birth, the pregnant female walrus separates from the herd and moves out onto the pack ice.", 
  "Walrus pups (also known as calves) are nursed at sea, hanging upside down in the water while being cradled by their mother’s flippers.", 
  "Males are aggressive with one another when finding a mate, with battles often resulting in injuries.", 
  "Male walruses can reach 3 – 3.5 meters long.", 
  "Females walruses usually grow to 2.5 meters long", 
  "Male walruses can weigh up to 2,645 pounds or 1.5 tons.", 
  "Female walruses can weigh up to 1,984 pounds.", 
  "Male walruses are called “bulls” and have cornified chests and shoulder areas that protect them in battle.", 
  "Walruses can eat as many as 3,000 – 6,000 clams in one feeding session.", 
  "Walruses scientific name is Odobenus rosmarus.", 
  "A group of walruses is called a herd.", 
  "The Pacific subspecies of walrus is larger than the Atlantic.", 
  "Walrus nurse their young for 2 or more years.", 
  "Walruses spend about two-thirds of their lives in the water.", 
  "A thick layer of blubber insulates the walrus. Blubber may be up to 15 cm thick.", 
  "During the winter, blubber may account for one-third of a walrus's total body mass.", 
  "A walrus has about 400 to 700 vibrissae on its snout.", 
  "Walruses may take in mouthfuls of water and squirt powerful jets at the sea floor, excavating burrowing invertebrates.",
  "Male walruses have a number of vocalizations, including bellowing and clacking to signal their desire for mating, give warnings or make other needs known in the wild.",
  "A walrus is a pinniped. A pinniped is an aquatic carnivorous mammal with all four limbs modified into flippers.",
  "Most scientists recognize two subspecies: the Pacific (Odobenus rosmarus divergent) and Atlantic (Odobenus rosmarus rosmarus) walruses.",
  "The Pacific walrus is larger, has longer tusks and a wider skull.",
  "The name walrus was originated with the Danish word hvalros, meaning “sea horse” or “sea cow”.",
  "Walruses are nicknamed 'tooth walker' since they use their tusks to 'walk' by hauling themselves ashore and to move around land.",
  "Walruses’ scientific name (Odobenus) translates from Latin into 'tooth walking sea horse'.",
  "Their blubber stores energy, insulates heat and increases buoyancy.",
  "There is one documented case in Spitzbergen (Svalbard) where walruses capsized a boat killing all aboard.",
  "While on land, it is not uncommon for a walrus to sleep for an uninterrupted 19 sold hours.",
  "With declining ice, commutes to shore can be more than 100 miles. Often, young calves do not survive the full journey.", 
  "Walrus hunting is prohibited in Svalbard. Svalbard is one of the best places in the world to see walruses."
);

$rand_keys = array_rand($input, 2);

echo $input[$rand_keys[0]] . "\n";
//echo $input[$rand_keys[1]] . "\n";
?>
