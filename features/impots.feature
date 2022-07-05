Feature: Impots basket
    Scenario Outline: Impots
        Give un homme avec <netImposable> euros de revenu et quoitent famillial de <qf>
        When je calcul son Impots
        Then il doit payer <expected>
        Examples:
        | netImposable | qf | expected |
        |   3200       | 1  | 3522     |
        |   55950      | 3  | 2780     |