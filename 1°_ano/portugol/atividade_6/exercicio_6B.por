programa
{
	
	funcao inicio()
	{
		questao_6b ()

	}

	funcao questao_6b ()
	{
		inteiro atual = 1
		inteiro antigo = 0
		inteiro atual2
		inteiro quantidade

		escreva("Insira a quantidade desejada de números:\n")
		leia(quantidade)

		para(inteiro i=0; i < quantidade; i++)
		{
			atual2 = atual
			atual = antigo + atual
			antigo = atual2
			escreva(atual, " ")
		}
	}
}
