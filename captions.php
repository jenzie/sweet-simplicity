<?php
	
	$pic = $_GET["pic"];
	
	$text = "";
	if ($pic == "Sunset")
		$text = "Sunset - Landscape (Digital Camera)";
	else
		if ($pic == "Trapped")
			$text = "Trapped - Back & White (Digital Camera)";
		else
			if ($pic == "Water")
				$text = "Water - Abstract (Digital Camera)";
			else
				if ($pic == "Wine")
					$text = "Wine - Still life (Digital Camera)";
				else
					if ($pic == "Glass")
						$text = "Glass - Abstract (Digital Camera)";
					else
						if ($pic == "Light")
							$text = "Light - Landscape (Digital Camera)";
						else
							if ($pic == "Hurled")
								$text = "Hurled - Motion (Digital Camera)";
							else
								if ($pic == "Hypnotic")
									$text = "Hypnotic - Motion (Digital Camera)";
								else
									if ($pic == "WaterM")
										$text = "Water - Motion (Digital Camera)";
									else
										if ($pic == "Album")
											$text = "Album Cover - Portrait (Digital Camera & Photoshop)";
										else
											if ($pic == "BW")
												$text = "Black & White - Portrait (Digital Camera)";
											else
												if ($pic == "Colored")
													$text = "Colored - Portrait (Digital Camera)";
												else
													if ($pic == "Le cafe damour")
														$text = "Le cafe d'amour - Business Card (InDesign & Photoshop)";
													else
														if ($pic == "La lecca-lecca")
															$text = "La lecca-lecca - Business Card (InDesign & Photoshop)";
														else
															if ($pic == "Media A")
																$text = "Media T-shirt Design #1 (Illustrator & Photoshop)";
															else
																if ($pic == "Media B")
																	$text = "Media T-shirt Design #2 (Illustrator & Photoshop)";
																else
																	if ($pic == "Red Bull")
																		$text = "Red Bull Ad (InDesign & Photoshop)";
																	else
																		if ($pic == "Name Tag")
																			$text = "Name Tag (Illustrator)";
																		else
																			if ($pic == "Symbolism")
																				$text = "Deity - Symbol (Illustrator)";
																			else
																				if ($pic == "Textual")
																					$text = "City - Text as Image (Illustrator)";
																				else
																					if ($pic == "Morass")
																						$text = "Morass - Photo Manipulation (Photoshop)";
																					else
																						if ($pic == "Phantasma")
																							$text = "Phantasma - Photo Manipulation (Photoshop)";
																						else
																							if ($pic == "Memory")
																								$text = "Memory Game (Flash & Photoshop)";
																							else
																								if ($pic == "Adventure")
																									$text = "Choose Your Own Adventure (Flash & Photoshop)";
					
		
	echo "<p style = 'font-family:verdana,sans-serif; font-size:11px; color:#797979'>".$text."</p>";
?>