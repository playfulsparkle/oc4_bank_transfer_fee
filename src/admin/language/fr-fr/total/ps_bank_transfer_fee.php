<?php
// Heading
$_['heading_title']                        = 'Playful Sparkle - Bank Transfer Fee';
$_['heading_getting_started']              = 'Premiers pas';
$_['heading_setup']                        = 'Configuration des frais de virement bancaire';
$_['heading_faq']                          = 'FAQ';
$_['heading_contact']                      = 'Contacter le support';

// Text
$_['text_extension']                       = 'Extensions';
$_['text_success']                         = 'Succès : Vous avez modifié les frais de virement bancaire !';
$_['text_edit']                            = 'Modifier les frais de virement bancaire';
$_['text_getting_started']                 = '<p><strong>Vue d\'ensemble :</strong> Le Playful Sparkle - Bank Transfer Fee pour OpenCart 4.x permet aux propriétaires de magasins d\'ajouter automatiquement des frais configurables aux commandes effectuées avec le mode de paiement par virement bancaire. Cela aide à compenser les coûts de transaction ou les frais de traitement associés aux virements bancaires, offrant ainsi plus de flexibilité et de contrôle sur les totaux finaux des commandes.</p><p><strong>Prérequis :</strong> OpenCart 4.x+, PHP 7.4+ ou version supérieure, et le mode de paiement par virement bancaire doit être activé dans les paramètres de votre magasin.</p>';
$_['text_setup']                           = '<p>Pour configurer, entrez le montant des frais que vous souhaitez appliquer à la caisse, sélectionnez la classe fiscale applicable et activez l\'extension. Une fois la configuration terminée, les frais seront automatiquement ajoutés lorsque le client choisira le virement bancaire lors du paiement.</p>';
$_['text_faq']                             = '<details><summary>Le montant des frais est-il saisi avec ou sans taxes ?</summary>Les frais sont appliqués avec les taxes incluses. Par exemple, si vous définissez les frais à 5 EUR, 5 EUR seront ajoutés au total de la commande avec les taxes incluses.</details><details><summary>Puis-je appliquer des frais différents pour d\'autres modes de paiement ?</summary>Non, cette extension n\'applique des frais que lorsque le mode de paiement par virement bancaire est sélectionné.</details><details><summary>Les frais seront-ils affichés séparément dans le récapitulatif de la commande ?</summary>Oui, les frais sont affichés en tant que ligne séparée dans le détail du total de la commande lors du paiement.</details>';
$_['text_contact']                         = '<p>Pour toute assistance supplémentaire, veuillez contacter notre équipe de support :</p><ul><li><strong>Contact :</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation :</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentation utilisateur</a></li></ul>';

// Tab
$_['tab_general']                          = 'Général';
$_['tab_help_and_support']                 = 'Aide &amp; Support';

// Entry
$_['entry_fee']                            = 'Frais';
$_['entry_tax_class']                      = 'Classe fiscale';
$_['entry_status']                         = 'Statut';
$_['entry_sort_order']                     = 'Ordre de tri';

// Error
$_['error_total_ps_bank_transfer_fee_fee'] = 'Les frais ne peuvent pas être vides ni inférieurs ou égaux à zéro';

// Error
$_['error_permission']                     = 'Avertissement : Vous n\'avez pas l\'autorisation de modifier les frais de virement bancaire !';
