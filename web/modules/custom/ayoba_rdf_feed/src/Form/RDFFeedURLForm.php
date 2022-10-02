<?php

/**
 * @file
 * A form to collect the url for the rdf feed.
 */

namespace Drupal\ayoba_rdf_feed\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class RDFFeedURLForm extends ConfigFormBase
{
    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'ayoba_rdf_feed_url_form';
    }

    /**
     * {@inheritdoc}
     */
    protected function getEditableConfigNames()
    {
        return ['ayoba_rdf_feed_url_form.settings'];
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['url'] = [
            '#type' => 'textfield',
            '#title' => $this->t('URL'),
            '#description' => $this->t('Enter the url for the rdf feed.'),
            '#required' => TRUE,
            '#default_value' => $this->config('ayoba_rdf_feed_url_form.settings')->get('url') ? $this->config('ayoba_rdf_feed_url_form.settings')->get('url') : 'ttt',
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        $url = $form_state->getValue('url');
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $form_state->setErrorByName('url', $this->t('The url is not valid.'));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $this->config('ayoba_rdf_feed_url_form.settings')
            ->set('url', $form_state->getValue('url'))
            ->save();
        parent::submitForm($form, $form_state);
        $this->messenger()->addMessage($this->t('The RDF Feed has been saved'));
    }
}
