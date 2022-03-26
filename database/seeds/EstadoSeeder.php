<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            [
                'id' => '1',
                'nome' => 'Acre',
                'uf' => 'AC',
                'slug' => 'acre',
            ],
            [
                'id' => '2',
                'nome' => 'Alagoas',
                'uf' => 'AL',
                'slug' => 'alagoas',
            ],
           [
                'id' => '3',
                'nome' => 'Amazonas',
                'uf' => 'AM',
                'slug' => 'amazonas',
           ],
       
            [
                'id' => '4',
                'nome' => 'Amapá',
                'uf' => 'AP',
                'slug' => 'amapa',
            ],
      
            [
                'id' => '5',
                'nome' => 'Bahia',
                'uf' => 'BA',
                'slug' => 'bahia',
            ],
        
            [
                'id' => '6',
                'nome' => 'Ceará',
                'uf' => 'CE',
                'slug' => 'ceara',
            ],
        
            [
                'id' => '7',
                'nome' => 'Distrito Federal',
                'uf' => 'DF',
                'slug' => 'distrito-federal',
            ],
         
            [
                'id' => '8',
                'nome' => 'Espírito Santo',
                'uf' => 'ES',
                'slug' => 'espirito-santo',
            ],
      
            [
                'id' => '9',
                'nome' => 'Goiás',
                'uf' => 'GO',
                'slug' => 'goias',
            ],
        
            [
                'id' => '10',
                'nome' => 'Maranhão',
                'uf' => 'MA',
                'slug' => 'maranhao',
            ],
    
            [
                'id' => '11',
                'nome' => 'Minas Gerais',
                'uf' => 'MG',
                'slug' => 'minas-gerais',
            ],
       
            [
                'id' => '12',
                'nome' => 'Mato Grosso do Sul',
                'uf' => 'MS',
                'slug' => 'mato-grosso-do-sul',
            ],
      
            [
                'id' => '13',
                'nome' => 'Mato Grosso',
                'uf' => 'MT',
                'slug' => 'mato-grosso',
            ],
        
            [
                'id' => '14',
                'nome' => 'Pará',
                'uf' => 'PA',
                'slug' => 'para',
            ],
        
            [
                'id' => '15',
                'nome' => 'Paraiba',
                'uf' => 'PB',
                'slug' => 'paraiba',
            ],
       
            [
                'id' => '16',
                'nome' => 'Pernambuco',
                'uf' => 'PE',
                'slug' => 'pernambuco',
            ],
      
            [
                'id' => '17',
                'nome' => 'Piauí',
                'uf' => 'PI',
                'slug' => 'piaui',
            ],
     
            [
                'id' => '18',
                'nome' => 'Paraná',
                'uf' => 'PR',
                'slug' => 'parana',
            ],
           
            [
                'id' => '19',
                'nome' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'slug' => 'rio-de-janeiro',
            ],
        
            [
                'id' => '20',
                'nome' => 'Rio Grande do Norte',
                'uf' => 'RN',
                'slug' => 'rio-grande-do-norte',
            ],
        
            [
                'id' => '21',
                'nome' => 'Rondônia',
                'uf' => 'RO',
                'slug' => 'rondonia',
            ],
        
            [
                'id' => '22',
                'nome' => 'Roraima',
                'uf' => 'RR',
                'slug' => 'roraima',
            ],
       
            [
                'id' => '23',
                'nome' => 'Rio Grande do Sul',
                'uf' => 'RS',
                'slug' => 'rio-grande-do-sul',
            ],
          
            [
                'id' => '24',
                'nome' => 'Santa Catarina',
                'uf' => 'SC',
                'slug' => 'santa-catarina',
            ],
       
            [
                'id' => '25',
                'nome' => 'Sergipe',
                'uf' => 'SE',
                'slug' => 'sergipe',
            ],
        
            [
                'id' => '26',
                'nome' => 'São Paulo',
                'uf' => 'SP',
                'slug' => 'sao-paulo',
            ],
        
            [
                'id' => '27',
                'nome' => 'Tocantins',
                'uf' => 'TO',
                'slug' => 'tocantins',
            ]
        ]);
    }
}
