<?php
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Information</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            animation: fadeIn 1s ease-in-out;
        }
        .message {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .typewriter {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            animation: typing 6s steps(40, end), blink-caret 0.75s step-end infinite;
            /* Adjust the width to fit your text */
            max-width: 32em;
            margin: 0 auto;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }
        @keyframes blink-caret {
            from, to { border-color: transparent; }
            50% { border-color: black; }
        }
		.back-home-btn {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Removes underline from link */
            font-size: 16px;
        }
        .back-home-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="message">
        <p>This service is intended for AJAX requests only.</p>
        <p class="typewriter">If you think this is an error, please contact OzzieHouso.</p>
		<p><a href="/" class="back-home-btn">Back Home</a></p>
    </div>
</body>
</html>
<?php
    exit;
}

function getHeadgearItems() {
    return [
        'BaseballCap_Beige', 'BaseballCap_Black', 'BaseballCap_Blue', 'BaseballCap_CMMG_Black', 
		'BaseballCap_CMMG_Pink', 'BaseballCap_Camo', 'BaseballCap_Olive', 'BaseballCap_Pink', 
		'BaseballCap_Red', 'FlatCap_Black', 'FlatCap_BlackCheck', 'FlatCap_Blue', 'FlatCap_Brown', 
		'FlatCap_BrownCheck', 'FlatCap_Grey', 'FlatCap_GreyCheck', 'FlatCap_Red', 'OKZKCap_Beige', 
		'OKZKCap_Green', 'RadarCap_Black', 'RadarCap_Blue', 'RadarCap_Brown', 'RadarCap_Green', 
		'RadarCap_Red', 'ZmijovkaCap_Black', 'ZmijovkaCap_Blue', 'ZmijovkaCap_Brown', 
		'ZmijovkaCap_Green', 'ZmijovkaCap_Red', 'BeanieHat_Beige', 'BeanieHat_Black', 'BeanieHat_Blue', 
		'BeanieHat_Brown', 'BeanieHat_Green', 'BeanieHat_Grey', 'BeanieHat_Pink', 'BeanieHat_Red', 
		'BoonieHat_Black', 'BoonieHat_Blue', 'BoonieHat_DPM', 'BoonieHat_Dubok', 'BoonieHat_Flecktran', 
		'BoonieHat_NavyBlue', 'BoonieHat_Olive', 'BoonieHat_Orange', 'BoonieHat_Red', 'BoonieHat_Tan', 
		'CowboyHat_Brown', 'CowboyHat_black', 'CowboyHat_darkBrown', 'CowboyHat_green', 
		'BallisticHelmet_Black', 'BallisticHelmet_Green', 'BallisticHelmet_UN', 
		'ConstructionHelmet_Blue', 'ConstructionHelmet_Lime', 'ConstructionHelmet_Orange', 
		'ConstructionHelmet_Red', 'ConstructionHelmet_White', 'ConstructionHelmet_Yellow', 
		'DarkMotoHelmet_Black', 'DarkMotoHelmet_Blue', 'DarkMotoHelmet_Green', 'DarkMotoHelmet_Grey', 
		'DarkMotoHelmet_Lime', 'DarkMotoHelmet_Red', 'DarkMotoHelmet_White', 'DarkMotoHelmet_Yellow', 
		'DarkMotoHelmet_YellowScarred', 'DirtBikeHelmet_Black', 'DirtBikeHelmet_Blue', 
		'DirtBikeHelmet_Chernarus', 'DirtBikeHelmet_Green', 'DirtBikeHelmet_Khaki', 
		'DirtBikeHelmet_Mouthguard', 'DirtBikeHelmet_Police', 'DirtBikeHelmet_Red', 
		'DirtBikeHelmet_Visor', 'FirefightersHelmet_Red', 'FirefightersHelmet_White', 
		'FirefightersHelmet_Yellow', 'GreatHelm', 'GorkaHelmet', 'GorkaHelmet_Black', 
		'GorkaHelmet_Green', 'HeadCover_Improvised', 'HockeyHelmet_Black', 'HockeyHelmet_Blue', 
		'HockeyHelmet_Red', 'HockeyHelmet_White', 'LeatherHat_Beige', 'LeatherHat_Black', 
		'LeatherHat_Brown', 'LeatherHat_Natural', 'MedicalScrubsHat_Blue', 'MedicalScrubsHat_Green', 
		'MedicalScrubsHat_White', 'MorozkoHat', 'Mich2001Helmet', 'MotoHelmet_Black', 'MotoHelmet_Blue', 
		'MotoHelmet_Green', 'MotoHelmet_Grey', 'MotoHelmet_Lime', 'MotoHelmet_Red', 'MotoHelmet_White', 
		'MotoHelmet_Yellow', 'NBCHoodGray', 'NBCHoodYellow', 'NorseHelm', 'OfficerHat', 
		'PetushokHat_Black', 'PetushokHat_Green', 'PetushokHat_Yellow', 'PilotkaCap', 'PoliceCap', 
		'PrisonerCap', 'PumpkinHelmet', 'SantasHat', 'SkateHelmet_Black', 'SkateHelmet_Blue', 
		'SkateHelmet_Gray', 'SkateHelmet_Green', 'SkateHelmet_Red', 'Ssh68Helmet', 'TankerHelmet', 
		'WitchHat', 'WitchHood_Black', 'WitchHood_Brown', 'WitchHood_Red', 'WinterCoif_Black','WinterCoif_Blue','WinterCoif_Green','WinterCoif_Skull','ZSh3PilotHelmet','ZSh3PilotHelmet_Black','ZSh3PilotHelmet_Green'
    ];
}

function getVestItems() {
    return [
        'Chestplate','HighCapacityVest_Black','HighCapacityVest_Olive','HuntingVest','LeatherStorageVest_Beige','LeatherStorageVest_Black','LeatherStorageVest_Brown','LeatherStorageVest_Natural','PlateCarrierVest','PlateCarrierVest_Black','PlateCarrierVest_Camo','PlateCarrierVest_Green','PoliceVest','PressVest_Blue','PressVest_LightBlue','ReflexVest','SmershVest','UKAssVest_Black','UKAssVest_Camo','UKAssVest_Khaki','UKAssVest_Olive'
    ];
}

function getEyewearItems() {
    return [
        'AviatorGlasses', 'DesignerGlasses', 'EyeMask_Black', 'EyeMask_Blue', 'EyeMask_Christmas', 'EyeMask_Dead', 'EyeMask_NewYears', 'EyeMask_Red', 'EyeMask_Valentines', 'EyeMask_Yellow', 'EyePatch_Improvised', 'SportGlasses_Black', 'SportGlasses_Blue', 'SportGlasses_Green', 'SportGlasses_Orange', 'TacticalGoggles', 'ThickFramesGlasses', 'ThinFramesGlasses'
    ];
}

function getBodyItems() {
    return [
        'BDUJacket', 'Blouse_Blue', 'Blouse_Green', 'Blouse_Violet', 'Blouse_White', 'BomberJacket_Black', 'BomberJacket_Blue', 'BomberJacket_Brown', 'BomberJacket_Grey', 'BomberJacket_Maroon', 'BomberJacket_Olive', 'BomberJacket_SkyBlue', 'Chainmail', 'ChernarusSportShirt', 'DenimJacket', 'FirefighterJacket_Beige', 'FirefighterJacket_Black', 'GorkaEJacket_Autumn', 'GorkaEJacket_Flat', 'GorkaEJacket_PautRev', 'GorkaEJacket_Summer', 'HikingJacket_Black', 'HikingJacket_Blue', 'HikingJacket_Green', 'HikingJacket_Red', 'Hoodie_Black', 'Hoodie_Blue', 'Hoodie_Brown', 'Hoodie_Green', 'Hoodie_Grey', 'Hoodie_Red', 'HuntingJacket_Autumn', 'HuntingJacket_Brown', 'HuntingJacket_Spring', 'HuntingJacket_Summer', 'HuntingJacket_Winter', 'JumpsuitJacket_Blue', 'JumpsuitJacket_Gray', 'JumpsuitJacket_Green', 'JumpsuitJacket_Red', 'LabCoat', 'LeatherJacket_Beige', 'LeatherJacket_Black', 'LeatherJacket_Brown', 'LeatherJacket_Natural', 'LeatherShirt_Natural', 'M65Jacket_Black', 'M65Jacket_Khaki', 'M65Jacket_Olive', 'M65Jacket_Tan', 'ManSuit_Beige', 'ManSuit_Black', 'ManSuit_Blue', 'ManSuit_Brown', 'ManSuit_DarkGrey', 'ManSuit_Khaki', 'ManSuit_LightGrey', 'ManSuit_White', 'MedicalScrubsShirt_Blue', 'MedicalScrubsShirt_Green', 'MedicalScrubsShirt_White', 'MiniDress_BlueChecker', 'MiniDress_BlueWithDots', 'MiniDress_BrownChecker', 'MiniDress_GreenChecker', 'MiniDress_Pink', 'MiniDress_PinkChecker', 'MiniDress_RedChecker', 'MiniDress_WhiteChecker', 'NBCJacketGray', 'NBCJacketYellow', 'NurseDress_Blue', 'NurseDress_White', 'ParamedicJacket_Blue', 'ParamedicJacket_Crimson', 'ParamedicJacket_Green', 'PoliceJacket', 'PoliceJacketOrel', 'PrisonUniformJacket', 'QuiltedJacket_Black', 'QuiltedJacket_Blue', 'QuiltedJacket_Green', 'QuiltedJacket_Grey', 'QuiltedJacket_Orange', 'QuiltedJacket_Red', 'QuiltedJacket_Violet', 'QuiltedJacket_Yellow', 'Raincoat_Black', 'Raincoat_Blue', 'Raincoat_Green', 'Raincoat_Orange', 'Raincoat_Pink', 'Raincoat_Red', 'Raincoat_Yellow', 'RidersJacket_Black', 'Shirt_BlueCheck', 'Shirt_BlueCheckBright', 'Shirt_GreenCheck', 'Shirt_PlaneBlack', 'Shirt_RedCheck', 'Shirt_WhiteCheck', 'Sweater_Blue', 'Sweater_Gray', 'Sweater_Green', 'Sweater_Red', 'TacticalShirt_Black', 'TacticalShirt_Grey', 'TacticalShirt_Olive', 'TacticalShirt_Tan', 'TelnyashkaShirt', 'TTsKOJacket_Camo', 'TrackSuitJacket_Black', 'TrackSuitJacket_Blue', 'TrackSuitJacket_Green', 'TrackSuitJacket_LightBlue', 'TrackSuitJacket_Red', 'Tshirt_10thAnniversary', 'TShirt_Beige', 'TShirt_Black', 'TShirt_Blue', 'TShirt_Green', 'TShirt_Grey', 'TShirt_OrangeWhiteStripes', 'TShirt_Red', 'TShirt_RedBlackStripes', 'TShirt_White', 'USMCJacket_Desert', 'USMCJacket_Woodland', 'WomanSuit_Beige', 'WomanSuit_Black', 'WomanSuit_Blue', 'WomanSuit_Brown', 'WomanSuit_DarkGrey', 'WomanSuit_Khaki', 'WomanSuit_LightGrey', 'WomanSuit_White', 'WoolCoat_Beige', 'WoolCoat_Black', 'WoolCoat_BlackCheck', 'WoolCoat_Blue', 'WoolCoat_BlueCheck', 'WoolCoat_BrownCheck', 'WoolCoat_Green', 'WoolCoat_GreyCheck', 'WoolCoat_Red', 'WoolCoat_RedCheck'
    ];
}

function getLegItems() {
    return [
        'BDUPants', 'Breeches_Beetcheck', 'Breeches_Beige', 'Breeches_Black', 'Breeches_Blackcheck', 'Breeches_Blue', 'Breeches_Browncheck', 'Breeches_Green', 'Breeches_Pink', 'Breeches_Red', 'Breeches_White', 'CanvasPantsMidi_Beige', 'CanvasPantsMidi_Blue', 'CanvasPantsMidi_Grey', 'CanvasPantsMidi_Red', 'CanvasPantsMidi_Violet', 'CanvasPants_Beige', 'CanvasPants_Blue', 'CanvasPants_Grey', 'CanvasPants_Red', 'CanvasPants_Violet', 'CargoPants_Beige', 'CargoPants_Black', 'CargoPants_Blue', 'CargoPants_Green', 'CargoPants_Grey', 'Chainmail_Leggings', 'FirefightersPants_Beige', 'FirefightersPants_Black', 'GorkaPants_Autumn', 'GorkaPants_Flat', 'GorkaPants_PautRev', 'GorkaPants_Summer', 'HunterPants_Autumn', 'HunterPants_Brown', 'HunterPants_Spring', 'HunterPants_Summer', 'HunterPants_Winter', 'Jeans_Black', 'Jeans_Blue', 'Jeans_BlueDark', 'Jeans_Brown', 'Jeans_Green', 'Jeans_Grey', 'JumpsuitPants_Blue', 'JumpsuitPants_Green', 'JumpsuitPants_Grey', 'JumpsuitPants_Red', 'LegsCover_Improvised', 'LeatherPants_Beige', 'LeatherPants_Black', 'LeatherPants_Brown', 'LeatherPants_Natural', 'MedicalScrubsPants_Blue', 'MedicalScrubsPants_Green', 'MedicalScrubsPants_White', 'NBCPantsGray', 'NBCPantsYellow', 'ParamedicPants_Blue', 'ParamedicPants_Crimson', 'ParamedicPants_Green', 'PolicePants', 'PolicePantsOrel', 'PrisonUniformPants', 'ShortJeans_Black', 'ShortJeans_Blue', 'ShortJeans_Brown', 'ShortJeans_Darkblue', 'ShortJeans_Green', 'ShortJeans_Red', 'Skirt_Blue', 'Skirt_Red', 'Skirt_White', 'Skirt_Yellow', 'SlacksPants_Beige', 'SlacksPants_Black', 'SlacksPants_Blue', 'SlacksPants_Brown', 'SlacksPants_DarkGrey', 'SlacksPants_Khaki', 'SlacksPants_LightGrey', 'SlacksPants_White', 'TTSKOPants', 'TrackSuitPants_Black', 'TrackSuitPants_Blue', 'TrackSuitPants_Green', 'TrackSuitPants_LightBlue', 'TrackSuitPants_Red', 'USMCPants_Desert', 'USMCPants_Woodland'
    ];
}

function getShoulderRItems() {
    return [
		'AK101', 'AK101_Black', 'AK101_Green', 'AK74', 'AK74_Black', 'AK74_Green', 'AKM', 'Aug', 'AugShort', 'ASVAL', 'B95', 'B95_Black', 'B95_Green', 'Broom', 'Broom_Birch', 'Crossbow_Autumn', 'Crossbow_Black', 'Crossbow_Summer', 'Crossbow_Wood', 'Crowbar', 'CZ527', 'CZ527_Black', 'CZ527_Camo', 'CZ527_Green', 'CZ550', 'CZ61', 'FAL', 'FAMAS', 'FarmingHoe', 'FireExtinguisher', 'FirefighterAxe', 'FirefighterAxe_Green', 'FirefighterAxe_Black', 'Izh18', 'Izh18Shotgun', 'Izh43Shotgun', 'M14', 'M16A2', 'M4A1', 'M4A1_Black', 'M4A1_Green', 'M79', 'Mace', 'Mosin9130', 'Mosin9130_Black', 'Mosin9130_Camo', 'Mosin9130_Green', 'Mp133Shotgun', 'MP5K', 'PipeWrench', 'Pipe', 'Pickaxe', 'Pitchfork', 'PP19', 'Repeater', 'Ruger1022', 'Saiga', 'SawedoffB95', 'SawedoffB95_Black', 'SawedoffB95_Green', 'SawedoffFAMAS', 'SawedoffIzh18', 'SawedoffIzh18Shotgun', 'SawedoffIzh43Shotgun', 'SawedoffMosin9130', 'SawedoffMosin9130_Black', 'SawedoffMosin9130_Camo', 'SawedoffMosin9130_Green', 'Scout', 'Scout_Chernarus', 'Scout_Livonia', 'Shovel', 'SKS', 'SKS_Black', 'SKS_Green', 'SledgeHammer', 'SSG82', 'SVD', 'Sword', 'UMP45', 'VSS', 'Winchester70', 'Winchester70_Black', 'Winchester70_Green', 'WoodAxe'
	];
}

function getShoulderLItems() {
    return [
		'AK101', 'AK101_Black', 'AK101_Green', 'AK74', 'AK74_Black', 'AK74_Green', 'AKM', 'Aug', 'AugShort', 'ASVAL', 'B95', 'B95_Black', 'B95_Green', 'Broom', 'Broom_Birch', 'Crossbow_Autumn', 'Crossbow_Black', 'Crossbow_Summer', 'Crossbow_Wood', 'Crowbar', 'CZ527', 'CZ527_Black', 'CZ527_Camo', 'CZ527_Green', 'CZ550', 'CZ61', 'FAL', 'FAMAS', 'FarmingHoe', 'FireExtinguisher', 'FirefighterAxe', 'FirefighterAxe_Green', 'FirefighterAxe_Black', 'Izh18', 'Izh18Shotgun', 'Izh43Shotgun', 'M14', 'M16A2', 'M4A1', 'M4A1_Black', 'M4A1_Green', 'M79', 'Mace', 'Mosin9130', 'Mosin9130_Black', 'Mosin9130_Camo', 'Mosin9130_Green', 'Mp133Shotgun', 'MP5K', 'PipeWrench', 'Pipe', 'Pickaxe', 'Pitchfork', 'PP19', 'Repeater', 'Ruger1022', 'Saiga', 'SawedoffB95', 'SawedoffB95_Black', 'SawedoffB95_Green', 'SawedoffFAMAS', 'SawedoffIzh18', 'SawedoffIzh18Shotgun', 'SawedoffIzh43Shotgun', 'SawedoffMosin9130', 'SawedoffMosin9130_Black', 'SawedoffMosin9130_Camo', 'SawedoffMosin9130_Green', 'Scout', 'Scout_Chernarus', 'Scout_Livonia', 'Shovel', 'SKS', 'SKS_Black', 'SKS_Green', 'SledgeHammer', 'SSG82', 'SVD', 'Sword', 'UMP45', 'VSS', 'Winchester70', 'Winchester70_Black', 'Winchester70_Green', 'WoodAxe'
	];
}

function getMaskItems() {
    return [
		'AirborneMask', 'BalaclavaMask_Beige', 'BalaclavaMask_Black', 'BalaclavaMask_Blackskull', 'BalaclavaMask_Blue', 'BalaclavaMask_Green', 'BalaclavaMask_Pink', 'BalaclavaMask_White', 'Bandana_Blackpattern', 'Bandana_Camopattern', 'Bandana_Greenpattern', 'Bandana_Polkapattern', 'Bandana_Redpattern', 'Bandana_Blue', 'Bandana_Pink', 'Bandana_Yellow', 'FaceCover_Improvised', 'GP5GasMask', 'GasMask', 'HockeyMask', 'MimeMask_Female', 'MimeMask_Male', 'NioshFaceMask', 'SantasBeard', 'SurgicalMask', 'WeldingMask'
	];
}

function getGloveItems() {
    return [
		'HandsCover_Improvised', 'LeatherGloves_Beige', 'LeatherGloves_Black', 'LeatherGloves_Brown', 'LeatherGloves_Natural', 'NBCGlovesGray', 'NBCGlovesYellow', 'OMNOGloves_Brown', 'OMNOGloves_Gray', 'PaddedGloves_Beige', 'PaddedGloves_Brown', 'PaddedGloves_Threat', 'SurgicalGloves_Blue', 'SurgicalGloves_Green', 'SurgicalGloves_LightBlue', 'SurgicalGloves_White', 'TacticalGloves_Beige', 'TacticalGloves_Black', 'TacticalGloves_Green', 'WoolGlovesFingerless_Black', 'WoolGlovesFingerless_ChristmasBlue', 'WoolGlovesFingerless_ChristmasRed', 'WoolGlovesFingerless_Green', 'WoolGlovesFingerless_Tan', 'WoolGlovesFingerless_White', 'WoolGloves_Black', 'WoolGloves_ChristmasBlue', 'WoolGloves_ChristmasRed', 'WoolGloves_Green', 'WoolGloves_Tan', 'WoolGloves_White', 'WorkingGloves_Beige', 'WorkingGloves_Black', 'WorkingGloves_Brown', 'WorkingGloves_Yellow'
	];
}

function getBackItems() {
    return [
		'AliceBag_Black', 'AliceBag_Camo', 'AliceBag_Green', 'ArmyPouch_Beige', 'ArmyPouch_Black', 'ArmyPouch_Camo', 'ArmyPouch_Green', 'AssaultBag_Black', 'AssaultBag_Green', 'AssaultBag_Ttsko', 'CanvasBag_Medical', 'CanvasBag_Olive', 'ChildBag_Blue', 'ChildBag_Green', 'ChildBag_Red', 'CourierBag', 'CoyoteBag_Brown', 'CoyoteBag_Green', 'DryBag_Black', 'DryBag_Blue', 'DryBag_Green', 'DryBag_Orange', 'DryBag_Red', 'DryBag_Yellow', 'DrysackBag_Green', 'DrysackBag_Orange', 'DrysackBag_Yellow', 'DuffelBagSmall_Camo', 'DuffelBagSmall_Green', 'DuffelBagSmall_Medical', 'FurCourierBag', 'FurImprovisedBag', 'HuntingBag', 'HuntingBag_Hannah', 'ImprovisedBag', 'LeatherSack_Beige', 'LeatherSack_Black', 'LeatherSack_Brown', 'LeatherSack_Natural', 'MountainBag_Blue', 'MountainBag_Green', 'MountainBag_Orange', 'MountainBag_Red', 'Slingbag_Black', 'Slingbag_Brown', 'Slingbag_Gray', 'SmershBag', 'TaloonBag_Blue', 'TaloonBag_Green', 'TaloonBag_Orange', 'TaloonBag_Violet', 'TortillaBag', 'WaterproofBag_Green', 'WaterproofBag_Orange', 'WaterproofBag_Yellow'
	];
}

function getArmbandItems() {
    return [
		'Armband_APA', 'Armband_Altis', 'Armband_BabyDeer', 'Armband_Bear', 'Armband_Blue', 'Armband_Black', 'Armband_Bohemia', 'Armband_BrainZ', 'Armband_CDF', 'Armband_CHEL', 'Armband_CMC', 'Armband_Cannibals', 'Armband_Chedaki', 'Armband_Chernarus', 'Armband_Crook', 'Armband_DayZ', 'Armband_Green', 'Armband_HunterZ', 'Armband_Livonia', 'Armband_LivoniaArmy', 'Armband_LivoniaPolice', 'Armband_NAPA', 'Armband_NSahrani', 'Armband_Orange', 'Armband_Pink', 'Armband_Pirates', 'Armband_Red', 'Armband_Refuge', 'Armband_Rex', 'Armband_Rooster', 'Armband_RSTA', 'Armband_Snake', 'Armband_SSahrani', 'Armband_TEC', 'Armband_UEC', 'Armband_White', 'Armband_Wolf', 'Armband_Yellow', 'Armband_Zagorky', 'Armband_Zenit'
	];
}

function getFeetItems() {
    return [
		'AthleticShoes_Blue', 'AthleticShoes_Black', 'AthleticShoes_Brown', 'AthleticShoes_Green', 'AthleticShoes_Grey', 'Ballerinas_Blue', 'Ballerinas_Red', 'Ballerinas_White', 'Ballerinas_Yellow', 'CombatBoots_Beige', 'CombatBoots_Black', 'CombatBoots_Brown', 'CombatBoots_Green', 'CombatBoots_Grey', 'FeetCover_Improvised', 'HikingBoots_Brown', 'HikingBoots_Black', 'HikingBootsLow_Black', 'HikingBootsLow_Blue', 'HikingBootsLow_Beige', 'HikingBootsLow_Grey', 'JoggingShoes_Black', 'JoggingShoes_Blue', 'JoggingShoes_Red', 'JoggingShoes_Violet', 'JoggingShoes_White', 'JungleBoots_Beige', 'JungleBoots_Black', 'JungleBoots_Brown', 'JungleBoots_Green', 'JungleBoots_Olive', 'LeatherShoes_Beige', 'LeatherShoes_Black', 'LeatherShoes_Brown', 'LeatherShoes_Sunburst', 'LeatherShoes_White', 'MedievalBoots', 'MilitaryBoots_Beige', 'MilitaryBoots_Black', 'MilitaryBoots_Bluerock', 'MilitaryBoots_Brown', 'MilitaryBoots_Redpunk', 'NBCBootsBase', 'NBCBootsGray', 'Sneakers_Black', 'Sneakers_Gray', 'Sneakers_Green', 'Sneakers_Red', 'Sneakers_White', 'TTSKOBoots', 'Wellies_Black', 'Wellies_Brown', 'Wellies_Green', 'Wellies_Grey', 'WorkingBoots_Grey', 'WorkingBoots_Brown', 'WorkingBoots_Green', 'WorkingBoots_Yellow', 'WorkingBoots_Beige'
	];
}

function getHipItems() {
    return [
		'CivilianBelt','LeatherBelt_Beige','LeatherBelt_Black','LeatherBelt_Brown','LeatherBelt_Natural','MilitaryBelt','RopeBelt'
	];
}
// Get the category from the query string
$category = $_GET['category'] ?? '';  // Default to an empty string if 'category' is not set
$itemOptions = [];

switch ($category) {
    case 'Headgear':
        $itemOptions = getHeadgearItems();
        break;
    case 'Vest':
        $itemOptions = getVestItems();
        break;
    case 'Eyewear':
        $itemOptions = getEyewearItems();
        break;
	case 'Body':
        $itemOptions = getBodyItems();
        break;
	case 'Legs':
        $itemOptions = getLegItems();
        break;
	case 'shoulderR':
        $itemOptions = getShoulderRItems();
        break;
	case 'shoulderL':
        $itemOptions = getShoulderLItems();
        break;
	case 'Mask':
        $itemOptions = getMaskItems();
        break;
	case 'Gloves':
        $itemOptions = getGloveItems();
        break;
	case 'Back':
        $itemOptions = getBackItems();
        break;
	case 'Armband':
        $itemOptions = getArmbandItems();
        break;
	case 'Feet':
        $itemOptions = getFeetItems();
        break;
	case 'Hips':
        $itemOptions = getHipItems();
        break;

    case 'childrenTypes':
        $itemOptions = array_merge(getHeadgearItems(), getVestItems(), getEyewearItems(), getBodyItems(), getLegItems(), getShoulderRItems(), getShoulderLItems(), getMaskItems(), getGloveItems(), getBackItems(), getArmbandItems(), getFeetItems(), getHipItems());
        break;
	case 'complexTypes':
        $itemOptions = array_merge(getHeadgearItems(), getVestItems(), getEyewearItems(), getBodyItems(), getLegItems(), getShoulderRItems(), getShoulderLItems(), getMaskItems(), getGloveItems(), getBackItems(), getArmbandItems(), getFeetItems(), getHipItems());
        break;
	case 'discreteTypes':
        $itemOptions = array_merge(getHeadgearItems(), getVestItems(), getEyewearItems(), getBodyItems(), getLegItems(), getShoulderRItems(), getShoulderLItems(), getMaskItems(), getGloveItems(), getBackItems(), getArmbandItems(), getFeetItems(), getHipItems());
        break;
}

echo json_encode($itemOptions);

?>
