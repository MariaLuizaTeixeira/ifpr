programa
{
	
	funcao inicio()
	{
		questao_4 ()
	}

	funcao questao_4 ()
	{
		inteiro base, expoente
		inteiro contador = 1
		

		escreva("Insira a base.\n")
		leia(base)

		escreva("Insira o expoente.\n")
		leia(expoente)

		inteiro resultado = base

		faca 
		{
			resultado = resultado * base	

			contador++
		}
		enquanto (contador < expoente)

		escreva("O resultado é ", resultado)
	}
}
