programa
{
	
	funcao inicio()
	{
		questao_2()
	}

	funcao questao_2()
	{
		real numero, media
		real soma = 0

		para(inteiro i = 0; i < 5; i++)
		{
			escreva("Informe um número. (", i + 1, ")\n")
			leia(numero)

			soma = soma + numero
		}

		media = soma / 5
		escreva("A soma é ", soma, ".\n")
		escreva("A media é ", media, ".\n")
	}
}
