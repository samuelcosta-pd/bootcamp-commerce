<?php
namespace Magento\GraphQlServer\Controller\Adminhtml\Graphql\Gateway;

/**
 * Interceptor class for @see \Magento\GraphQlServer\Controller\Adminhtml\Graphql\Gateway
 */
class Interceptor extends \Magento\GraphQlServer\Controller\Adminhtml\Graphql\Gateway implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Serialize\SerializerInterface $jsonSerializer, \Magento\Framework\GraphQl\Exception\ExceptionFormatter $graphQlError, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\GraphQlServer\Model\Server $server, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($jsonSerializer, $graphQlError, $jsonFactory, $server, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function createCsrfValidationException(\Magento\Framework\App\RequestInterface $request): ?\Magento\Framework\App\Request\InvalidRequestException
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createCsrfValidationException');
        return $pluginInfo ? $this->___callPlugins('createCsrfValidationException', func_get_args(), $pluginInfo) : parent::createCsrfValidationException($request);
    }

    /**
     * {@inheritdoc}
     */
    public function validateForCsrf(\Magento\Framework\App\RequestInterface $request): ?bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateForCsrf');
        return $pluginInfo ? $this->___callPlugins('validateForCsrf', func_get_args(), $pluginInfo) : parent::validateForCsrf($request);
    }

    /**
     * {@inheritdoc}
     */
    public function _processUrlKeys()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_processUrlKeys');
        return $pluginInfo ? $this->___callPlugins('_processUrlKeys', func_get_args(), $pluginInfo) : parent::_processUrlKeys();
    }

    /**
     * {@inheritdoc}
     */
    public function formatError(string $message): string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatError');
        return $pluginInfo ? $this->___callPlugins('formatError', func_get_args(), $pluginInfo) : parent::formatError($message);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl($route, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        return $pluginInfo ? $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo) : parent::getActionFlag();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        return $pluginInfo ? $this->___callPlugins('getRequest', func_get_args(), $pluginInfo) : parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        return $pluginInfo ? $this->___callPlugins('getResponse', func_get_args(), $pluginInfo) : parent::getResponse();
    }
}
