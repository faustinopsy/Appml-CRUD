{"security": "admin",
	
"database" : {
    "connection" : "mydatabase",
    "sql" : "SELECT IDprod,NomeProd,fornecedor.nomeforn,categorias.nomecat,Preco FROM ((produtos INNER JOIN fornecedor ON produtos.IDforn=fornecedor.IDforn) INNER JOIN categorias ON produtos.IDcat=categorias.IDCat)",
    "orderby" : "NomeProd"
},
"filteritems" : [
    {"item" : "NomeProd", "label" : "NomeProd"},
    {"item" : "produtos.IDforn", "type" : "number", "hidden" : "true"},
    {"item" : "fornecedor.IDforn", "label" : "fornecedor"},    
    {"item" : "Categorias.IDCat", "label" : "categoria"}
],
"sortitems" : [
    {"item" : "NomeProd"}
],
"pelle" : "kanin"
}