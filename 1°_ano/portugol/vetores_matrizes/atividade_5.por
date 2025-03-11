programa
{
	
	funcao inicio()
	{
		inteiro vetor[10]
		para(inteiro i=0; i < 10; i++)
		{
			vetor[i] = sorteia(0, 10)

			para(inteiro j=0; j < 10; j++)
			{
				se(vetor[i] == vetor[j] e j != i)
				{
					vetor[i] = sorteia(0, 10)
					j = -1
				}
			}
		}
	}
}
