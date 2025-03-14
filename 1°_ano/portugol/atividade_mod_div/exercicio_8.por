programa
{
	
	funcao inicio()
	{
		inteiro latas, latas_necessarias, litros, preco, tamanho
		escreva("Quantos metros quadrados você pretende pintar?\n")
		leia(tamanho)

		litros = tamanho / 3
		latas = litros / 18
		latas_necessarias = 0

		se(latas % 1 == 0)
		{
			latas_necessarias = latas + 1
		}
		preco = latas_necessarias * 480
		
		escreva("Você precisará de ", latas_necessarias, "latas de tintas, o que custará ", preco, "reais.")
		
	}
}
