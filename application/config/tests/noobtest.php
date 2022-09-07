<?php

return [
	[
		'gname' => 'ПЕРСОНАЛ',
		'quest' => [
			[
				'name' => 'Чи перевіряється попередньо при співбесіді на посаду кандидатура (довідки з попереднього місця роботи, відгуки, рекомендації, правдивість резюме, соціальні мережі, форуми, спеціалізовані анкети і т.д.)?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи є у компанії HR-відділ або фахівець по роботі з кадрами?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Серед кадрового складу є матеріально-відповідальні особи (штатні співробітники)?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Всі співробітники компанії офіційно оформлені?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'На підприємстві розроблено алгоритм "життєвого циклу" співробітника від прийому на роботу до звільнення?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'На підприємстві впроваджено положення про комерційну таємницю?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'У штаті виділено посаду співробітника або групи співробітників, на яких за наказом покладені питання безпеки компанії?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи були в компанії протягом останніх 12 місяців інциденти, пов’язані з кадрами – крадіжки, шахрайство, витік даних, змова і т.д.?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 5,
					],
					[	
						'name' => 'Ні',
						'score' => 1,
					],
				],
			],
			[
				'name' => 'Яким є статус генерального/виконавчого директору компанії (в цілому, керівника компанії)?',
				'variants' => [
					[
						'name' => 'Власник',
						'score' => 1,
					],
					[	
						'name' => 'Найманий співробітник',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Яким є статус таких співробітників, як головний бухгалтер, бухгалтер, менеджери, IT-фахівець?',
				'variants' => [
					[
						'name' => 'Офіційно працевлаштований згідно КЗпП',
						'score' => 1,
					],
					[	
						'name' => 'На аутсорсі',
						'score' => 2,
					],
					[
						'name' => 'Працює за трудовим договором',
						'score' => 3,
					],
					[	
						'name' => 'Працює неофіційно',
						'score' => 5,
					],
				],
			],
		],
	],
	[
		'gname' => 'РОБОТА З КОНТРАГЕНТАМИ',
		'quest' => [
			[
				'name' => 'На підприємстві ведеться перевірка контрагентів?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'За останні 12 місяців зустрічалися випадки лобіювання співробітниками інтересів контрагента?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 5,
					],
					[
						'name' => 'Ні',
						'score' => 1,
					],
				],
			],
			[
				'name' => 'Чи зустрічаються порушення договірних зобов’язань?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 5,
					],
					[	
						'name' => 'Ні',
						'score' => 1,
					],
				],
			],
			[
				'name' => 'Чи трапляється, що співробітники підприємства укладають договори з контрагентами на свідомо неоптимальні умовах?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 5,
					],
					[	
						'name' => 'Ні',
						'score' => 1,
					],
				],
			],
			[
				'name' => 'Чи відомі випадки, коли близькі родичі ключових співробітників працюють в компаніях-контрагентах?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 5,
					],
					[
						'name' => 'Ні',
						'score' => 1,
					],
				],
			],
			[
				'name' => 'Чи були випадки, коли дебіторську заборгованість доводилося отримувати через рішення суду?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 5,
					],
					[
						'name' => 'Ні',
						'score' => 1,
					],
				],
			],
			[
				'name' => 'Чи відомі випадки, коли співробітники компанії отримували відкати від контрагентів?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 5,
					],
					[	
						'name' => 'Ні',
						'score' => 1,
					],
				],
			],
			[
				'name' => 'Чи траплялися випадки несумлінного виконання контрагентами своїх зобов’язань за останні 18 місяців?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 5,
					],
					[	
						'name' => 'Ні',
						'score' => 1,
					],
				],
			],
			[
				'name' => 'Чи траплялися випадки роботи з контрагентом без договору?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 5,
					],
					[	
						'name' => 'Ні',
						'score' => 1,
					],
				],
			],
			[
				'name' => 'Чи проводиться на підприємстві превентивна робота засобами конкурентної розвідки з аналізу контрагентів?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
		],
	],
	[
		'gname' => 'ФІЗИЧНИЙ ЗАХИСТ ТА ТЕХНІЧНІ ЗАСОБИ ОХОРОНИ (ТЗО)',
		'quest' => [
			[
				'name' => 'На підприємстві існує політика застосування ТЗО?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Хто на підприємстві реалізує впровадження ТЗО?',
				'variants' => [
					[
						'name' => 'Співробітники компанії',
						'score' => 1,
					],
					[
						'name' => 'Сторонні фахівці',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Підрядник по впровадженню ТЗО має ліцензію і професійний кадровий склад?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи укладені з підрядниками договори на обслуговування ТЗО?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'На підприємстві впроваджена система периметрального відеоспостереження?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'На підприємстві впроваджена система контролю доступу та домофонії?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'На підприємстві впроваджена система охоронної сигналізації?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Система охоронної сигналізації виведена на ПЦС?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'На підприємстві впроваджена система внутрішнього відеоспостереження?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'На підприємстві впроваджена система пожежної сигналізації та пожежогасіння?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
		],
	],
	[
		'gname' => 'ТЕХНОЛОГІЇ ТА ІТ',
		'quest' => [
			[
				'name' => 'На підприємстві виділено IT-відділ?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Яким чином виглядають робочі місця співробітників?',
				'variants' => [
					[
						'name' => 'Стаціонарні ПК/ноутбуки',
						'score' => 1,
					],
					[
						'name' => 'Віддалені робочі місця на базі тонких клієнтів',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи проводиться резервування даних?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи проводиться превентивна робота з співробітниками по підвищенню комп’ютерної грамотності?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Якою мобільною технікою (ноутбуки, смартфони, планшети) користуються співробітники?',
				'variants' => [
					[
						'name' => 'Корпоративною',
						'score' => 1,
					],
					[
						'name' => 'Персональною',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи виносять співробітники на USB-накопичувачах корпоративну інформацію для роботи вдома або з іншими "благими намірами"?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 5,
					],
					[
						'name' => 'Ні',
						'score' => 1,
					],
				],
			],
			[
				'name' => 'Яким є програмне забезпечення?',
				'variants' => [
					[
						'name' => 'Ліцензійне',
						'score' => 1,
					],
					[	
						'name' => 'Піратське',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи встановлені антивірусні програми?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи присутня концентрація прав доступу до ПК та елементів мережі в одних руках?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Яку електронну пошту використовують співробітники?',
				'variants' => [
					[
						'name' => 'Корпоративну',
						'score' => 1,
					],
					[	
						'name' => 'Персональну',
						'score' => 5,
					],
				],
			],
		],
	],
	[
		'gname' => 'ДОКУМЕНТООБІГ',
		'quest' => [
			[
				'name' => 'На підприємстві впроваджена політика захищеного документообігу?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи виділений в штаті відповідальний співробітник для організації політики захищеного документообігу?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Яким є різновид документообігу на підприємстві?',
				'variants' => [
					[
						'name' => 'Паперовий',
						'score' => 5,
					],
					[	
						'name' => 'Електронний',
						'score' => 3,
					],
					[	
						'name' => 'Змішаний',
						'score' => 1,
					],
				],
			],
			[
				'name' => 'Чи розуміють співробітники відмінності відкритої інформації, персональних даних та інформації з ознаками комерційної таємниці?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи проводиться на підприємстві захист персональних даних?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи контролюється процес копіювання документів співробітниками підприємства?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи існує архів документів?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи проводиться правильне знищення документів (спалювання, хімічне знищення, порізка)?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'Чи затверджена процедура отримання доступу до інформації з грифом КТ?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
			[
				'name' => 'У роботі компанії використовуються шредери?',
				'variants' => [
					[
						'name' => 'Так',
						'score' => 1,
					],
					[	
						'name' => 'Ні',
						'score' => 5,
					],
				],
			],
		],
	],
];