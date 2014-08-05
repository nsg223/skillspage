<?php 
    
    //Human Readable list of all the skills, in matching order of returndata function
      $rskills=array("<h4>Magic</h4>", 
                     "Healing Magic", 
                     "Defensive Affliction", 
                     "Elemental Magic", 
                     "Offensive Affliction", 
                     "<h4>Fight</h4>",
                     "Mace", 
                     "Staff",
                     "Spear", 
                     "Sword", 
                     "Axe", 
                     "Two Hand Mace", 
                     "Pike", 
                     "Two Hand Sword", 
                     "Two Hand Axe", 
                     "Close Combat", 
                     "Dagger", 
                     "Pistol", 
                     "Launcher",
                     "Rifle", 
                     "AutoLauncher", 
                     "<h4>Craft</h4>",
                     "Heavy Boots", 
                     "Heavy Gloves", 
                     "Heavy Helmet", 
                     "Heavy Pants", 
                     "Heavy Sleeves", 
                     "Heavy Vest",
                     "Light Boots", 
                     "Light Pants", 
                     "Light Gloves", 
                     "Light Sleeves", 
                     "Light Vest",
                     "Medium Boots", 
                     "Medium Pants", 
                     "Medium Gloves", 
                     "Medium Sleeves", 
                     "Medium Vest",
                     "Buckler", 
                     "Shield",
                     "Anklet", 
                     "Bracelet", 
                     "Diadem", 
                     "Earring", 
                     "Pendant", 
                     "Ring", 
                     "Magic Amplifiers",
                     "Mace", 
                     "Staff", 
                     "Spear", 
                     "Sword", 
                     "Axe", 
                     "Dagger", 
                     "Two Hand Mace", 
                     "Pike", 
                     "Two Hand Sword", 
                     "Two Hand Axe", 
                     "Pistol", 
                     "Launcher", 
                     "Rifle", 
                     "AutoLauncher", 
                     "<h4>Forage</h4>",
                     "Desert", 
                     "Forest", 
                     "Lakes", 
                     "Jungle", "Prime Roots", 
                     "Total Masters"
                   );
      
        //Function that gets the branch value
  function getbranch($xml, $branch) {
    $skill = 0;
    $b250 = $branch;
    $b200 = substr($branch, 0, 6);
    $b150 = substr($branch, 0, 5);
    $b100 = substr($branch, 0, 4);
    $b50 = substr($branch, 0, 3);
    $b20 = substr($branch, 0, 2);

    if ($xml->character->skills->$b250 >= 200) {
      $skill = $xml->character->skills->$b250; 
    }
    elseif ($xml->character->skills->$b200 >= 150 && $skill <= 200) {
      $skill = $xml->character->skills->$b200;
    }
    elseif ($xml->character->skills->$b150 >= 100 && $skill <= 150 ) {
      $skill = $xml->character->skills->$b150;
    }
    elseif ($xml->character->skills->$b100 >= 50 && $skill <= 100) {
      $skill = $xml->character->skills->$b100;
    }
    elseif ($xml->character->skills->$b50 >= 20 && $skill <=50) {
      $skill = $xml->character->skills->$b50;
    }
    elseif ($xml->character->skills->$b20 > 0 && $skill <=20) {
      $skill = $xml->character->skills->$b20;
    }
    return $skill;
  }

  function returndata($xml) {
      $dskills = array("<h4>".$xml->character->name."</h4>",
                     getbranch($xml, "smdhaem"),
                     getbranch($xml, "smdaaem"),
                     getbranch($xml, "smoeaem"),
                     getbranch($xml, "smoaaem"),
                     "<h4>".$xml->character->name."</h4>",
                     getbranch($xml, "sfm1bmm"),
                     getbranch($xml, "sfm1bsm"),
                     getbranch($xml, "sfm1psm"),
                     getbranch($xml, "sfm1ssm"),
                     getbranch($xml, "sfm1sam"),
                     getbranch($xml, "sfm2bmm"),
                     getbranch($xml, "sfm2ppm"),
                     getbranch($xml, "sfm2ssm"),
                     getbranch($xml, "sfm2sam"),
                     getbranch($xml, "sfmcahm"),
                     getbranch($xml, "sfmcadm"),
                     getbranch($xml, "sfr1apm"),
                     getbranch($xml, "sfr2alm"),
                     getbranch($xml, "sfr2arm"),
                     getbranch($xml, "sfr2aam"),
                     "<h4>".$xml->character->name."</h4>",
                     getbranch($xml, "scahbem"),
                     getbranch($xml, "scahgem"),
                     getbranch($xml, "scahhem"),
                     getbranch($xml, "scahpem"),
                     getbranch($xml, "scahsem"),
                     getbranch($xml, "scahvem"),
                     getbranch($xml, "scalbem"),
                     getbranch($xml, "scalpem"),
                     getbranch($xml, "scalgem"),
                     getbranch($xml, "scalsem"),
                     getbranch($xml, "scalvem"),
                     getbranch($xml, "scambem"),
                     getbranch($xml, "scampem"),
                     getbranch($xml, "scamgem"),
                     getbranch($xml, "scamsem"),
                     getbranch($xml, "scamvem"),
                     getbranch($xml, "scasbem"),
                     getbranch($xml, "scassem"),
                     getbranch($xml, "scjaaem"),
                     getbranch($xml, "scjbaem"),
                     getbranch($xml, "scjdaem"),
                     getbranch($xml, "scjeaem"),
                     getbranch($xml, "scjpaem"),
                     getbranch($xml, "scjraem"),
                     getbranch($xml, "scmcaem"),
                     getbranch($xml, "scm1mem"),
                     getbranch($xml, "scm1tem"),
                     getbranch($xml, "scm1pem"),
                     getbranch($xml, "scm1sem"),
                     getbranch($xml, "scm1aem"),
                     getbranch($xml, "scm1dem"),
                     getbranch($xml, "scm2mem"),
                     getbranch($xml, "scm2pem"),
                     getbranch($xml, "scm2sem"),
                     getbranch($xml, "scm2aem"),
                     getbranch($xml, "scr1pem"),
                     getbranch($xml, "scr2lem"),
                     getbranch($xml, "scr2rem"),
                     getbranch($xml, "scr2aem"),
                     "<h4>".$xml->character->name."</h4>",
                     getbranch($xml, "shfdaem"),
                     getbranch($xml, "shffaem"),
                     getbranch($xml, "shflaem"),
                     getbranch($xml, "shfjaem"),
                     getbranch($xml, "shfpaem"),
                     0);
      return $dskills;
  }

?>