programa
{
	
	funcao inicio()
	{
		questao_6 ()

	}

	funcao questao_6 ()
	{
		inteiro atual = 1
		inteiro antigo = 0
		inteiro atual2

		para(inteiro i=0; i < 500; i++)
		{
			atual2 = atual
			atual = antigo + atual
			antigo = atual2
			escreva(atual, " ")
		}
	}
}
