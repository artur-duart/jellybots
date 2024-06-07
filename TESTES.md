# 🔒 Testes de Qualidade de Código e Segurança

## ✅ Testes de Qualidade de Código

Acesse o [relatório](https://sonarcloud.io/summary/overall?id=artur-duart_jellybots) feito pelo SonarCloud.

O relatório destacou vários aspectos que precisam de melhoria, com foco na segurança, confiabilidade e manutenção do código. A aplicação não apresentou problemas de segurança críticos, mas foram identificados 30 pontos de atenção em segurança que precisam de revisão. Entre eles, quatro estão relacionados à vulnerabilidade de negação de serviço (DoS), devido ao uso de expressões regulares que podem ter tempos de execução longos por conta do backtracking. Esses casos precisam ser revisados e otimizados para evitar que o sistema fique vulnerável a ataques de negação de serviço. Além disso, foram encontrados dois casos de uso de geradores de números pseudoaleatórios, que precisam ser avaliados para garantir que não comprometam a segurança da aplicação.

Em relação à confiabilidade, a análise revelou 33 problemas abertos, divididos entre 5 de alta severidade, 18 de severidade média e 10 de baixa severidade. Um exemplo significativo de um problema de alta severidade é o uso inseguro de ThrowStatement no arquivo public/js/app.js, que pode causar falhas inesperadas na aplicação. Problemas de severidade média, como a ausência de uma família de fontes genéricas no arquivo public/css/bootstrap-icons.css, e problemas de baixa severidade, como o uso de "require" em vez de "require_once" no arquivo public/index.php, também foram destacados.

A manutenibilidade do código foi uma área com muitos desafios, apresentando um total de 2.000 problemas abertos, sendo 1.477 de alta severidade, 355 de severidade média e 118 de baixa severidade. Exemplos de problemas de alta severidade incluem a duplicação de literais no arquivo config/database.php, onde a string "127.0.0.1" foi repetida cinco vezes em vez de ser definida como uma constante. Essa prática pode levar a erros difíceis de rastrear, e corrigi-los melhoraria significativamente a clareza e a manutenção do código. Outros problemas destacados incluem a presença de código comentado não utilizado em arquivos como app/Models/User.php e database/seeders/DatabaseSeeder.php, que precisam ser removidos para manter o código limpo e compreensível.

Além disso, a análise identificou uma densidade de linhas duplicadas de 4,7%, totalizando 1.421 linhas duplicadas em três arquivos principais: config/database.php, resources/js/app.js e public/js/app.js. Essa duplicação de código é problemática, pois pode levar a inconsistências e aumento no esforço de manutenção. Reduzir as duplicações através da refatoração e reutilização de componentes de código pode melhorar a qualidade geral e a eficiência do desenvolvimento.

Por fim, as práticas de desenvolvimento e a arquitetura do sistema mostram uma abordagem organizada e metódica. A utilização do framework Laravel e a adoção da arquitetura MVC (Model-View-Controller) são pontos positivos que facilitam a manutenção e a escalabilidade do projeto. No entanto, a análise destacou a necessidade de melhorar certas práticas, como a realização de revisões de código mais frequentes e a implementação de testes automatizados mais abrangentes, para garantir a qualidade contínua do código.

![Overview](./img/sonarcloud.png)

## 🔐 Testes de Segurança

A análise de segurança conduzida pelo OWASP ZAP identificou múltiplos alertas de média e baixa prioridade, destacando vulnerabilidades potenciais que exigem atenção imediata.

Uma das principais preocupações identificadas foi a ausência do cabeçalho Content Security Policy (CSP), o que representa um risco médio de segurança. O CSP é uma camada adicional de segurança que ajuda a detectar e mitigar certos tipos de ataques, incluindo Cross Site Scripting (XSS) e ataques de injeção de dados. Sua implementação é crucial para proteger a aplicação contra esses tipos de ameaças.

Outra preocupação de média prioridade é a ausência do cabeçalho Anti-clickjacking, que protege contra ataques de ClickJacking. É importante implementar esse cabeçalho para garantir a integridade da aplicação e proteger os usuários contra esse tipo de ataque.

Além disso, foram identificados riscos de baixa prioridade, como a presença de cookies sem o flag HttpOnly, o que pode levar a problemas de hijacking de sessão, e a divulgação de informações por meio de cabeçalhos de resposta HTTP "X-Powered-By". Esses são problemas que, embora não sejam críticos, ainda precisam ser corrigidos para garantir a segurança geral da aplicação.

Também foi identificada a presença de comentários suspeitos que podem revelar informações sensíveis sobre a aplicação, bem como a falta do cabeçalho X-Content-Type-Options, que pode levar a problemas de interpretação de conteúdo pelo navegador.

Por fim, o OWASP ZAP destacou que a aplicação parece ser uma aplicação web moderna e sugeriu o uso do Ajax Spider para explorá-la automaticamente. Além disso, identificou um token de gerenciamento de sessão na resposta, o que pode ser útil para métodos de gerenciamento de sessão baseados em cabeçalhos.

![Overview](./img/owasp.png)
