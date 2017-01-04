// Днів в році N
								$daysOfTheYear = $_SESSION['N'];
								$k = $_SESSION['K'];
								// Кількість страйків, що відбулися в році
								$strikeAmount = 0;
								$y = 1;
								echo $k;
								while ($y < $k+1):
									$_SESSION['a$y'] = $_POST['a$y'];
									$_SESSION['b$y'] = $_POST['b$y'];
									$j = $_SESSION['a$y'];
									$y++;
									echo $j;
								endwhile;
								echo $k;
								echo $daysOfTheYear;
								// Масив політичних партій елементами якого є масиви значень
								// ai - початок страйків та bi - інтервал страйків
								$politicalPartiesArray = array (
									array (2, 3),
									array (3, 5),
									array (9, 8)
								);

								// Перевірка по партіям
								foreach ($politicalPartiesArray as $key => $politicalParty) {

									// Встановлення дня початку страйків для чергової партії
									$srikeDay = $politicalParty[0];

									// Встановлення першої неділі для чергової партії
									$weekEnd = 7;

									echo 'Політична партія ' . ($key + 1) . ' проводить страйки - ';

									// Перевірка по дням у році
									for ($dayCounter = 1; $dayCounter <= $daysOfTheYear; $dayCounter++) {

										if ($srikeDay == $dayCounter) {

											// Збільшити кількість страйків на 1 якщо будній день
											if (($weekEnd != $dayCounter) && (($weekEnd - 1) != $dayCounter)) {
												echo ' ' . $srikeDay;
												$strikeAmount++;
											}

											if (($weekEnd - 1) == $dayCounter) 
												echo '<b> (' . $srikeDay . ' Сб)</b>';
											if ($weekEnd == $dayCounter)
												echo '<b> (' . $srikeDay . ' Нд)</b>';

											// Отримання наступного дня страйку для чергової партії
											$srikeDay += $politicalParty[1];
										}

										// Отримання наступнї неділі для чергової партії
										if ($weekEnd == $dayCounter)
											$weekEnd += 7;
									}
									echo '<br>';
								}
								echo 'Всього страйків за рік - ' . $strikeAmount;