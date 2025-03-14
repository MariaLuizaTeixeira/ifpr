programa
{
	
	funcao inicio()
	{
		real anos_jupiter, anos_marte, anos_mercurio, anos_netuno, anos_terra,
		real anos_urano, anos_venus, segundos_terra
		cadeia planeta
		escreva("Qual a sua idade em segundos terrestres?\n")
		leia(segundos_terra)
		anos_terra = segundos_terra / (60 * 60 * 24 * 365)
		
		escreva("Para qual planeta você quer converter a sua idade?\n")
		leia(planeta)

		se (planeta == "júpiter" ou planeta == "Júpiter" ou planeta == "jupiter" ou planeta == "Jupiter")
		{
			anos_jupiter = anos_terra / 11.8
			escreva("A sua idade em Júpiter é de ", anos_jupiter, " anos.")
		}
		
		senao se(planeta == "marte" ou planeta == "Marte")
		{
			anos_marte = anos_terra / 1.88
			escreva("A sua idade em Marte é de ", anos_marte, " anos.")
		}
		
		senao se (planeta == "mercúrio" ou planeta == "Mercúrio" ou planeta == "mercurio" ou planeta == "Mercurio")
		{
			anos_mercurio = anos_terra / 0.25
			escreva("A sua idade em Mercúrio é de ", anos_mercurio, " anos.")
		}
		
		senao se (planeta == "netuno" ou planeta == "Netuno")
		{
			anos_netuno = anos_terra / 165
			escreva("A sua idade em Netuno é de ", anos_netuno, " anos.")
		}
		
		senao se (planeta == "urano" ou planeta == "Urano")
		{
			anos_urano = anos_terra / 84
			escreva("A sua idade em Urano é de ", anos_urano, " anos.")
		}
		
		senao se (planeta == "vênus" ou planeta == "Vênus" ou planeta == "venus" ou planeta == "vênus")
		{
			anos_venus = anos_terra / 0.6
			escreva("A sua idade em Vênus é de ", anos_venus, " anos.")
		}
	}
}
