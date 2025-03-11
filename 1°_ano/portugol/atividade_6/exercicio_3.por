programa
{
	
	funcao inicio()
	{
		questao_3 ()
	}

	funcao questao_3 ()
	{
		real atual
		real maior = 0

		para(inteiro i=0; i < 5; i++)
		{
			escreva("Insira um número:\n")
			leia(atual)

			se (atual > maior)
			{
				maior = atual
			}
		}
		
		escreva ("O maior número foi ", maior, ".")
	}
}
