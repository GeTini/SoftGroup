// ��� � ���� N
								$daysOfTheYear = $_SESSION['N'];
								$k = $_SESSION['K'];
								// ʳ������ �������, �� �������� � ����
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
								// ����� ��������� ����� ���������� ����� � ������ �������
								// ai - ������� ������� �� bi - �������� �������
								$politicalPartiesArray = array (
									array (2, 3),
									array (3, 5),
									array (9, 8)
								);

								// �������� �� ������
								foreach ($politicalPartiesArray as $key => $politicalParty) {

									// ������������ ��� ������� ������� ��� ������� ����
									$srikeDay = $politicalParty[0];

									// ������������ ����� ���� ��� ������� ����
									$weekEnd = 7;

									echo '�������� ����� ' . ($key + 1) . ' ��������� ������� - ';

									// �������� �� ���� � ����
									for ($dayCounter = 1; $dayCounter <= $daysOfTheYear; $dayCounter++) {

										if ($srikeDay == $dayCounter) {

											// �������� ������� ������� �� 1 ���� ����� ����
											if (($weekEnd != $dayCounter) && (($weekEnd - 1) != $dayCounter)) {
												echo ' ' . $srikeDay;
												$strikeAmount++;
											}

											if (($weekEnd - 1) == $dayCounter) 
												echo '<b> (' . $srikeDay . ' ��)</b>';
											if ($weekEnd == $dayCounter)
												echo '<b> (' . $srikeDay . ' ��)</b>';

											// ��������� ���������� ��� ������� ��� ������� ����
											$srikeDay += $politicalParty[1];
										}

										// ��������� ������� ���� ��� ������� ����
										if ($weekEnd == $dayCounter)
											$weekEnd += 7;
									}
									echo '<br>';
								}
								echo '������ ������� �� �� - ' . $strikeAmount;