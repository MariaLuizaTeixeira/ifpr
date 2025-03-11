programa
{
	
	funcao inicio()
	{
		inteiro vetor_3[30]
		inteiro chave
		inteiro quantidade = 0

		para(inteiro i=0; i < 30; i++)
		{
			 vetor_3 [i] = sorteia(0, 15)
		}

		escreva("Insira a chave:")
		leia(chave)

		escreva("O número ", chave, " apareceu nas posições ")
		
		para(inteiro i=0; i < 30; i++)
		{
			se(chave == vetor_3[i])
			{
				escreva(i, "\n")
				quantidade++
				
			}
		}

		escreva("Logo, ele apareceu ", quantidade, " vezes.")
	}
}
