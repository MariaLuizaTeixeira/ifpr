programa
{
	
	funcao inicio()
	{
		questao_7 ()
	}

	funcao questao_7 ()
	{
		inteiro numero
		inteiro multiplicador 
		inteiro resultado = 1

		escreva("Insira um número:\n")
		leia(numero)

		multiplicador = numero

		enquanto(multiplicador > 2)
		{
			numero = numero * (multiplicador - 1)
			multiplicador--
		}
		
		escreva("O resultado é: ", numero)
	}
}
