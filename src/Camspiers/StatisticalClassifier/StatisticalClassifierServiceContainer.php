<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * StatisticalClassifierServiceContainer
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class StatisticalClassifierServiceContainer extends Container
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();

        $this->set('service_container', $this);

        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'cache' => 'getCacheService',
            'cache.backend' => 'getCache_BackendService',
            'classifier.complement_naive_bayes' => 'getClassifier_ComplementNaiveBayesService',
            'classifier.model' => 'getClassifier_ModelService',
            'classifier.source' => 'getClassifier_SourceService',
            'classifier.svm' => 'getClassifier_SvmService',
            'console.application' => 'getConsole_ApplicationService',
            'console.command.classify' => 'getConsole_Command_ClassifyService',
            'console.command.config.create' => 'getConsole_Command_Config_CreateService',
            'console.command.config.open' => 'getConsole_Command_Config_OpenService',
            'console.command.config.remove' => 'getConsole_Command_Config_RemoveService',
            'console.command.generate_container' => 'getConsole_Command_GenerateContainerService',
            'console.command.model.prepare' => 'getConsole_Command_Model_PrepareService',
            'console.command.model.remove' => 'getConsole_Command_Model_RemoveService',
            'console.command.self_update' => 'getConsole_Command_SelfUpdateService',
            'console.command.server.run' => 'getConsole_Command_Server_RunService',
            'console.command.test.directory' => 'getConsole_Command_Test_DirectoryService',
            'console.command.test.pdo' => 'getConsole_Command_Test_PdoService',
            'console.command.train.directory' => 'getConsole_Command_Train_DirectoryService',
            'console.command.train.document' => 'getConsole_Command_Train_DocumentService',
            'console.command.train.pdo' => 'getConsole_Command_Train_PdoService',
            'converter.converter' => 'getConverter_ConverterService',
            'converter.from' => 'getConverter_FromService',
            'converter.to' => 'getConverter_ToService',
            'json_pretty' => 'getJsonPrettyService',
            'normalizer.lowercase' => 'getNormalizer_LowercaseService',
            'normalizer.porter' => 'getNormalizer_PorterService',
            'normalizer.stopword' => 'getNormalizer_StopwordService',
            'normalizer.stopword_lowercase' => 'getNormalizer_StopwordLowercaseService',
            'normalizer.stopword_lowercase_porter' => 'getNormalizer_StopwordLowercasePorterService',
            'svm' => 'getSvmService',
            'tokenizer.word' => 'getTokenizer_WordService',
        );

        $this->aliases = array();
    }

    /**
     * Gets the 'cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CacheCache\Cache A CacheCache\Cache instance.
     */
    protected function getCacheService()
    {
        return $this->services['cache'] = new \CacheCache\Cache($this->get('cache.backend'));
    }

    /**
     * Gets the 'cache.backend' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return CacheCache\Backends\File A CacheCache\Backends\File instance.
     */
    protected function getCache_BackendService()
    {
        return $this->services['cache.backend'] = new \CacheCache\Backends\File(array('dir' => '/Users/cameron/modules/statistical-classifier-console/cache', 'file_extension' => '.cache'));
    }

    /**
     * Gets the 'classifier.complement_naive_bayes' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Classifier\ComplementNaiveBayes A Camspiers\StatisticalClassifier\Classifier\ComplementNaiveBayes instance.
     */
    protected function getClassifier_ComplementNaiveBayesService()
    {
        return $this->services['classifier.complement_naive_bayes'] = new \Camspiers\StatisticalClassifier\Classifier\ComplementNaiveBayes($this->get('classifier.source'), $this->get('classifier.model'), $this->get('tokenizer.word'), $this->get('normalizer.stopword_lowercase'));
    }

    /**
     * Gets the 'classifier.model' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getClassifier_ModelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("classifier.model"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'classifier.source' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getClassifier_SourceService()
    {
        throw new RuntimeException('You have requested a synthetic service ("classifier.source"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'classifier.svm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Classifier\SVM A Camspiers\StatisticalClassifier\Classifier\SVM instance.
     */
    protected function getClassifier_SvmService()
    {
        return $this->services['classifier.svm'] = new \Camspiers\StatisticalClassifier\Classifier\SVM($this->get('classifier.source'), $this->get('classifier.model'), $this->get('tokenizer.word'), $this->get('normalizer.stopword_lowercase'), $this->get('svm'));
    }

    /**
     * Gets the 'console.application' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Application A Camspiers\StatisticalClassifier\Console\Application instance.
     */
    protected function getConsole_ApplicationService()
    {
        $this->services['console.application'] = $instance = new \Camspiers\StatisticalClassifier\Console\Application('PHP Classifier', '~package_version~');

        $instance->add($this->get('console.command.model.remove'));
        $instance->add($this->get('console.command.model.prepare'));
        $instance->add($this->get('console.command.train.document'));
        $instance->add($this->get('console.command.train.directory'));
        $instance->add($this->get('console.command.train.pdo'));
        $instance->add($this->get('console.command.classify'));
        $instance->add($this->get('console.command.test.pdo'));
        $instance->add($this->get('console.command.test.directory'));
        $instance->add($this->get('console.command.server.run'));
        $instance->add($this->get('console.command.config.create'));
        $instance->add($this->get('console.command.config.remove'));
        $instance->add($this->get('console.command.config.open'));
        $instance->add($this->get('console.command.generate_container'));
        $instance->add($this->get('console.command.self_update'));

        return $instance;
    }

    /**
     * Gets the 'console.command.classify' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\ClassifyCommand A Camspiers\StatisticalClassifier\Console\Command\ClassifyCommand instance.
     */
    protected function getConsole_Command_ClassifyService()
    {
        $this->services['console.command.classify'] = $instance = new \Camspiers\StatisticalClassifier\Console\Command\ClassifyCommand();

        $instance->setCache($this->get('cache'));

        return $instance;
    }

    /**
     * Gets the 'console.command.config.create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\Config\CreateCommand A Camspiers\StatisticalClassifier\Console\Command\Config\CreateCommand instance.
     */
    protected function getConsole_Command_Config_CreateService()
    {
        return $this->services['console.command.config.create'] = new \Camspiers\StatisticalClassifier\Console\Command\Config\CreateCommand($this->get('json_pretty'));
    }

    /**
     * Gets the 'console.command.config.open' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\Config\OpenCommand A Camspiers\StatisticalClassifier\Console\Command\Config\OpenCommand instance.
     */
    protected function getConsole_Command_Config_OpenService()
    {
        return $this->services['console.command.config.open'] = new \Camspiers\StatisticalClassifier\Console\Command\Config\OpenCommand();
    }

    /**
     * Gets the 'console.command.config.remove' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\Config\RemoveCommand A Camspiers\StatisticalClassifier\Console\Command\Config\RemoveCommand instance.
     */
    protected function getConsole_Command_Config_RemoveService()
    {
        return $this->services['console.command.config.remove'] = new \Camspiers\StatisticalClassifier\Console\Command\Config\RemoveCommand();
    }

    /**
     * Gets the 'console.command.generate_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\GenerateContainerCommand A Camspiers\StatisticalClassifier\Console\Command\GenerateContainerCommand instance.
     */
    protected function getConsole_Command_GenerateContainerService()
    {
        return $this->services['console.command.generate_container'] = new \Camspiers\StatisticalClassifier\Console\Command\GenerateContainerCommand();
    }

    /**
     * Gets the 'console.command.model.prepare' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\Model\PrepareCommand A Camspiers\StatisticalClassifier\Console\Command\Model\PrepareCommand instance.
     */
    protected function getConsole_Command_Model_PrepareService()
    {
        $this->services['console.command.model.prepare'] = $instance = new \Camspiers\StatisticalClassifier\Console\Command\Model\PrepareCommand();

        $instance->setCache($this->get('cache'));

        return $instance;
    }

    /**
     * Gets the 'console.command.model.remove' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\Model\RemoveCommand A Camspiers\StatisticalClassifier\Console\Command\Model\RemoveCommand instance.
     */
    protected function getConsole_Command_Model_RemoveService()
    {
        $this->services['console.command.model.remove'] = $instance = new \Camspiers\StatisticalClassifier\Console\Command\Model\RemoveCommand();

        $instance->setCache($this->get('cache'));

        return $instance;
    }

    /**
     * Gets the 'console.command.self_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\SelfUpdateCommand A Camspiers\StatisticalClassifier\Console\Command\SelfUpdateCommand instance.
     */
    protected function getConsole_Command_SelfUpdateService()
    {
        return $this->services['console.command.self_update'] = new \Camspiers\StatisticalClassifier\Console\Command\SelfUpdateCommand();
    }

    /**
     * Gets the 'console.command.server.run' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\Server\RunCommand A Camspiers\StatisticalClassifier\Console\Command\Server\RunCommand instance.
     */
    protected function getConsole_Command_Server_RunService()
    {
        $this->services['console.command.server.run'] = $instance = new \Camspiers\StatisticalClassifier\Console\Command\Server\RunCommand();

        $instance->setCache($this->get('cache'));

        return $instance;
    }

    /**
     * Gets the 'console.command.test.directory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\Test\DirectoryCommand A Camspiers\StatisticalClassifier\Console\Command\Test\DirectoryCommand instance.
     */
    protected function getConsole_Command_Test_DirectoryService()
    {
        $this->services['console.command.test.directory'] = $instance = new \Camspiers\StatisticalClassifier\Console\Command\Test\DirectoryCommand();

        $instance->setCache($this->get('cache'));

        return $instance;
    }

    /**
     * Gets the 'console.command.test.pdo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\Test\PDOCommand A Camspiers\StatisticalClassifier\Console\Command\Test\PDOCommand instance.
     */
    protected function getConsole_Command_Test_PdoService()
    {
        $this->services['console.command.test.pdo'] = $instance = new \Camspiers\StatisticalClassifier\Console\Command\Test\PDOCommand();

        $instance->setCache($this->get('cache'));

        return $instance;
    }

    /**
     * Gets the 'console.command.train.directory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\Train\DirectoryCommand A Camspiers\StatisticalClassifier\Console\Command\Train\DirectoryCommand instance.
     */
    protected function getConsole_Command_Train_DirectoryService()
    {
        $this->services['console.command.train.directory'] = $instance = new \Camspiers\StatisticalClassifier\Console\Command\Train\DirectoryCommand();

        $instance->setCache($this->get('cache'));

        return $instance;
    }

    /**
     * Gets the 'console.command.train.document' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\Train\DocumentCommand A Camspiers\StatisticalClassifier\Console\Command\Train\DocumentCommand instance.
     */
    protected function getConsole_Command_Train_DocumentService()
    {
        $this->services['console.command.train.document'] = $instance = new \Camspiers\StatisticalClassifier\Console\Command\Train\DocumentCommand();

        $instance->setCache($this->get('cache'));

        return $instance;
    }

    /**
     * Gets the 'console.command.train.pdo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Console\Command\Train\PDOCommand A Camspiers\StatisticalClassifier\Console\Command\Train\PDOCommand instance.
     */
    protected function getConsole_Command_Train_PdoService()
    {
        $this->services['console.command.train.pdo'] = $instance = new \Camspiers\StatisticalClassifier\Console\Command\Train\PDOCommand();

        $instance->setCache($this->get('cache'));

        return $instance;
    }

    /**
     * Gets the 'converter.converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\DataSource\Converter A Camspiers\StatisticalClassifier\DataSource\Converter instance.
     */
    protected function getConverter_ConverterService()
    {
        return $this->services['converter.converter'] = new \Camspiers\StatisticalClassifier\DataSource\Converter($this->get('converter.from'), $this->get('converter.to'));
    }

    /**
     * Gets the 'converter.from' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getConverter_FromService()
    {
        throw new RuntimeException('You have requested a synthetic service ("converter.from"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'converter.to' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getConverter_ToService()
    {
        throw new RuntimeException('You have requested a synthetic service ("converter.to"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'json_pretty' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\JsonPretty\JsonPretty A Camspiers\JsonPretty\JsonPretty instance.
     */
    protected function getJsonPrettyService()
    {
        return $this->services['json_pretty'] = new \Camspiers\JsonPretty\JsonPretty();
    }

    /**
     * Gets the 'normalizer.lowercase' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Normalizer\Lowercase A Camspiers\StatisticalClassifier\Normalizer\Lowercase instance.
     */
    protected function getNormalizer_LowercaseService()
    {
        return $this->services['normalizer.lowercase'] = new \Camspiers\StatisticalClassifier\Normalizer\Lowercase();
    }

    /**
     * Gets the 'normalizer.porter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Normalizer\Porter A Camspiers\StatisticalClassifier\Normalizer\Porter instance.
     */
    protected function getNormalizer_PorterService()
    {
        return $this->services['normalizer.porter'] = new \Camspiers\StatisticalClassifier\Normalizer\Porter();
    }

    /**
     * Gets the 'normalizer.stopword' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Normalizer\Stopword A Camspiers\StatisticalClassifier\Normalizer\Stopword instance.
     */
    protected function getNormalizer_StopwordService()
    {
        return $this->services['normalizer.stopword'] = new \Camspiers\StatisticalClassifier\Normalizer\Stopword(array(0 => 'a', 1 => 'a\'s', 2 => 'able', 3 => 'about', 4 => 'above', 5 => 'according', 6 => 'accordingly', 7 => 'across', 8 => 'actually', 9 => 'after', 10 => 'afterwards', 11 => 'again', 12 => 'against', 13 => 'ain\'t', 14 => 'all', 15 => 'allow', 16 => 'allows', 17 => 'almost', 18 => 'alone', 19 => 'along', 20 => 'already', 21 => 'also', 22 => 'although', 23 => 'always', 24 => 'am', 25 => 'among', 26 => 'amongst', 27 => 'an', 28 => 'and', 29 => 'another', 30 => 'any', 31 => 'anybody', 32 => 'anyhow', 33 => 'anyone', 34 => 'anything', 35 => 'anyway', 36 => 'anyways', 37 => 'anywhere', 38 => 'apart', 39 => 'appear', 40 => 'appreciate', 41 => 'appropriate', 42 => 'are', 43 => 'aren\'t', 44 => 'around', 45 => 'as', 46 => 'aside', 47 => 'ask', 48 => 'asking', 49 => 'associated', 50 => 'at', 51 => 'available', 52 => 'away', 53 => 'awfully', 54 => 'be', 55 => 'became', 56 => 'because', 57 => 'become', 58 => 'becomes', 59 => 'becoming', 60 => 'been', 61 => 'before', 62 => 'beforehand', 63 => 'behind', 64 => 'being', 65 => 'believe', 66 => 'below', 67 => 'beside', 68 => 'besides', 69 => 'best', 70 => 'better', 71 => 'between', 72 => 'beyond', 73 => 'both', 74 => 'brief', 75 => 'but', 76 => 'by', 77 => 'c\'mon', 78 => 'c\'s', 79 => 'came', 80 => 'can', 81 => 'can\'t', 82 => 'cannot', 83 => 'cant', 84 => 'cause', 85 => 'causes', 86 => 'certain', 87 => 'certainly', 88 => 'changes', 89 => 'clearly', 90 => 'co', 91 => 'com', 92 => 'come', 93 => 'comes', 94 => 'concerning', 95 => 'consequently', 96 => 'consider', 97 => 'considering', 98 => 'contain', 99 => 'containing', 100 => 'contains', 101 => 'corresponding', 102 => 'could', 103 => 'couldn\'t', 104 => 'course', 105 => 'currently', 106 => 'definitely', 107 => 'described', 108 => 'despite', 109 => 'did', 110 => 'didn\'t', 111 => 'different', 112 => 'do', 113 => 'does', 114 => 'doesn\'t', 115 => 'doing', 116 => 'don\'t', 117 => 'done', 118 => 'down', 119 => 'downwards', 120 => 'during', 121 => 'each', 122 => 'edu', 123 => 'eg', 124 => 'eight', 125 => 'either', 126 => 'else', 127 => 'elsewhere', 128 => 'enough', 129 => 'entirely', 130 => 'especially', 131 => 'et', 132 => 'etc', 133 => 'even', 134 => 'ever', 135 => 'every', 136 => 'everybody', 137 => 'everyone', 138 => 'everything', 139 => 'everywhere', 140 => 'ex', 141 => 'exactly', 142 => 'example', 143 => 'except', 144 => 'far', 145 => 'few', 146 => 'fifth', 147 => 'first', 148 => 'five', 149 => 'followed', 150 => 'following', 151 => 'follows', 152 => 'for', 153 => 'former', 154 => 'formerly', 155 => 'forth', 156 => 'four', 157 => 'from', 158 => 'further', 159 => 'furthermore', 160 => 'get', 161 => 'gets', 162 => 'getting', 163 => 'given', 164 => 'gives', 165 => 'go', 166 => 'goes', 167 => 'going', 168 => 'gone', 169 => 'got', 170 => 'gotten', 171 => 'greetings', 172 => 'had', 173 => 'hadn\'t', 174 => 'happens', 175 => 'hardly', 176 => 'has', 177 => 'hasn\'t', 178 => 'have', 179 => 'haven\'t', 180 => 'having', 181 => 'he', 182 => 'he\'s', 183 => 'hello', 184 => 'help', 185 => 'hence', 186 => 'her', 187 => 'here', 188 => 'here\'s', 189 => 'hereafter', 190 => 'hereby', 191 => 'herein', 192 => 'hereupon', 193 => 'hers', 194 => 'herself', 195 => 'hi', 196 => 'him', 197 => 'himself', 198 => 'his', 199 => 'hither', 200 => 'hopefully', 201 => 'how', 202 => 'howbeit', 203 => 'however', 204 => 'i\'d', 205 => 'i\'ll', 206 => 'i\'m', 207 => 'i\'ve', 208 => 'ie', 209 => 'if', 210 => 'ignored', 211 => 'immediate', 212 => 'in', 213 => 'inasmuch', 214 => 'inc', 215 => 'indeed', 216 => 'indicate', 217 => 'indicated', 218 => 'indicates', 219 => 'inner', 220 => 'insofar', 221 => 'instead', 222 => 'into', 223 => 'inward', 224 => 'is', 225 => 'isn\'t', 226 => 'it', 227 => 'it\'d', 228 => 'it\'ll', 229 => 'it\'s', 230 => 'its', 231 => 'itself', 232 => 'just', 233 => 'keep', 234 => 'keeps', 235 => 'kept', 236 => 'know', 237 => 'known', 238 => 'knows', 239 => 'last', 240 => 'lately', 241 => 'later', 242 => 'latter', 243 => 'latterly', 244 => 'least', 245 => 'less', 246 => 'lest', 247 => 'let', 248 => 'let\'s', 249 => 'like', 250 => 'liked', 251 => 'likely', 252 => 'little', 253 => 'look', 254 => 'looking', 255 => 'looks', 256 => 'ltd', 257 => 'mainly', 258 => 'many', 259 => 'may', 260 => 'maybe', 261 => 'me', 262 => 'mean', 263 => 'meanwhile', 264 => 'merely', 265 => 'might', 266 => 'more', 267 => 'moreover', 268 => 'most', 269 => 'mostly', 270 => 'much', 271 => 'must', 272 => 'my', 273 => 'myself', 274 => 'name', 275 => 'namely', 276 => 'nd', 277 => 'near', 278 => 'nearly', 279 => 'necessary', 280 => 'need', 281 => 'needs', 282 => 'neither', 283 => 'never', 284 => 'nevertheless', 285 => 'new', 286 => 'next', 287 => 'nine', 288 => 'no', 289 => 'nobody', 290 => 'non', 291 => 'none', 292 => 'noone', 293 => 'nor', 294 => 'normally', 295 => 'not', 296 => 'nothing', 297 => 'novel', 298 => 'now', 299 => 'nowhere', 300 => 'obviously', 301 => 'of', 302 => 'off', 303 => 'often', 304 => 'oh', 305 => 'ok', 306 => 'okay', 307 => 'old', 308 => 'on', 309 => 'once', 310 => 'one', 311 => 'ones', 312 => 'only', 313 => 'onto', 314 => 'or', 315 => 'other', 316 => 'others', 317 => 'otherwise', 318 => 'ought', 319 => 'our', 320 => 'ours', 321 => 'ourselves', 322 => 'out', 323 => 'outside', 324 => 'over', 325 => 'overall', 326 => 'own', 327 => 'particular', 328 => 'particularly', 329 => 'per', 330 => 'perhaps', 331 => 'placed', 332 => 'please', 333 => 'plus', 334 => 'possible', 335 => 'presumably', 336 => 'probably', 337 => 'provides', 338 => 'que', 339 => 'quite', 340 => 'qv', 341 => 'rather', 342 => 'rd', 343 => 're', 344 => 'really', 345 => 'reasonably', 346 => 'regarding', 347 => 'regardless', 348 => 'regards', 349 => 'relatively', 350 => 'respectively', 351 => 'right', 352 => 'said', 353 => 'same', 354 => 'saw', 355 => 'say', 356 => 'saying', 357 => 'says', 358 => 'second', 359 => 'secondly', 360 => 'see', 361 => 'seeing', 362 => 'seem', 363 => 'seemed', 364 => 'seeming', 365 => 'seems', 366 => 'seen', 367 => 'self', 368 => 'selves', 369 => 'sensible', 370 => 'sent', 371 => 'serious', 372 => 'seriously', 373 => 'seven', 374 => 'several', 375 => 'shall', 376 => 'she', 377 => 'should', 378 => 'shouldn\'t', 379 => 'since', 380 => 'six', 381 => 'so', 382 => 'some', 383 => 'somebody', 384 => 'somehow', 385 => 'someone', 386 => 'something', 387 => 'sometime', 388 => 'sometimes', 389 => 'somewhat', 390 => 'somewhere', 391 => 'soon', 392 => 'sorry', 393 => 'specified', 394 => 'specify', 395 => 'specifying', 396 => 'still', 397 => 'sub', 398 => 'such', 399 => 'sup', 400 => 'sure', 401 => 't\'s', 402 => 'take', 403 => 'taken', 404 => 'tell', 405 => 'tends', 406 => 'th', 407 => 'than', 408 => 'thank', 409 => 'thanks', 410 => 'thanx', 411 => 'that', 412 => 'that\'s', 413 => 'thats', 414 => 'the', 415 => 'their', 416 => 'theirs', 417 => 'them', 418 => 'themselves', 419 => 'then', 420 => 'thence', 421 => 'there', 422 => 'there\'s', 423 => 'thereafter', 424 => 'thereby', 425 => 'therefore', 426 => 'therein', 427 => 'theres', 428 => 'thereupon', 429 => 'these', 430 => 'they', 431 => 'they\'d', 432 => 'they\'ll', 433 => 'they\'re', 434 => 'they\'ve', 435 => 'think', 436 => 'third', 437 => 'this', 438 => 'thorough', 439 => 'thoroughly', 440 => 'those', 441 => 'though', 442 => 'three', 443 => 'through', 444 => 'throughout', 445 => 'thru', 446 => 'thus', 447 => 'to', 448 => 'together', 449 => 'too', 450 => 'took', 451 => 'toward', 452 => 'towards', 453 => 'tried', 454 => 'tries', 455 => 'truly', 456 => 'try', 457 => 'trying', 458 => 'twice', 459 => 'two', 460 => 'un', 461 => 'under', 462 => 'unfortunately', 463 => 'unless', 464 => 'unlikely', 465 => 'until', 466 => 'unto', 467 => 'up', 468 => 'upon', 469 => 'us', 470 => 'use', 471 => 'used', 472 => 'useful', 473 => 'uses', 474 => 'using', 475 => 'usually', 476 => 'value', 477 => 'various', 478 => 'very', 479 => 'via', 480 => 'viz', 481 => 'vs', 482 => 'want', 483 => 'wants', 484 => 'was', 485 => 'wasn\'t', 486 => 'way', 487 => 'we', 488 => 'we\'d', 489 => 'we\'ll', 490 => 'we\'re', 491 => 'we\'ve', 492 => 'welcome', 493 => 'well', 494 => 'went', 495 => 'were', 496 => 'weren\'t', 497 => 'what', 498 => 'what\'s', 499 => 'whatever', 500 => 'when', 501 => 'whence', 502 => 'whenever', 503 => 'where', 504 => 'where\'s', 505 => 'whereafter', 506 => 'whereas', 507 => 'whereby', 508 => 'wherein', 509 => 'whereupon', 510 => 'wherever', 511 => 'whether', 512 => 'which', 513 => 'while', 514 => 'whither', 515 => 'who', 516 => 'who\'s', 517 => 'whoever', 518 => 'whole', 519 => 'whom', 520 => 'whose', 521 => 'why', 522 => 'will', 523 => 'willing', 524 => 'wish', 525 => 'with', 526 => 'within', 527 => 'without', 528 => 'won\'t', 529 => 'wonder', 530 => 'would', 531 => 'wouldn\'t', 532 => 'yes', 533 => 'yet', 534 => 'you', 535 => 'you\'d', 536 => 'you\'ll', 537 => 'you\'re', 538 => 'you\'ve', 539 => 'your', 540 => 'yours', 541 => 'yourself', 542 => 'yourselves', 543 => 'zero'));
    }

    /**
     * Gets the 'normalizer.stopword_lowercase' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Normalizer\Grouped A Camspiers\StatisticalClassifier\Normalizer\Grouped instance.
     */
    protected function getNormalizer_StopwordLowercaseService()
    {
        return $this->services['normalizer.stopword_lowercase'] = new \Camspiers\StatisticalClassifier\Normalizer\Grouped(array(0 => $this->get('normalizer.lowercase'), 1 => $this->get('normalizer.stopword')));
    }

    /**
     * Gets the 'normalizer.stopword_lowercase_porter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Normalizer\Grouped A Camspiers\StatisticalClassifier\Normalizer\Grouped instance.
     */
    protected function getNormalizer_StopwordLowercasePorterService()
    {
        return $this->services['normalizer.stopword_lowercase_porter'] = new \Camspiers\StatisticalClassifier\Normalizer\Grouped(array(0 => $this->get('normalizer.stopword_lowercase'), 1 => $this->get('normalizer.porter')));
    }

    /**
     * Gets the 'svm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return SVM A SVM instance.
     */
    protected function getSvmService()
    {
        $this->services['svm'] = $instance = new \SVM();

        $instance->setOptions(array(102 => 0));

        return $instance;
    }

    /**
     * Gets the 'tokenizer.word' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Camspiers\StatisticalClassifier\Tokenizer\Word A Camspiers\StatisticalClassifier\Tokenizer\Word instance.
     */
    protected function getTokenizer_WordService()
    {
        return $this->services['tokenizer.word'] = new \Camspiers\StatisticalClassifier\Tokenizer\Word();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritDoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }
    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'stopwords' => array(
                0 => 'a',
                1 => 'a\'s',
                2 => 'able',
                3 => 'about',
                4 => 'above',
                5 => 'according',
                6 => 'accordingly',
                7 => 'across',
                8 => 'actually',
                9 => 'after',
                10 => 'afterwards',
                11 => 'again',
                12 => 'against',
                13 => 'ain\'t',
                14 => 'all',
                15 => 'allow',
                16 => 'allows',
                17 => 'almost',
                18 => 'alone',
                19 => 'along',
                20 => 'already',
                21 => 'also',
                22 => 'although',
                23 => 'always',
                24 => 'am',
                25 => 'among',
                26 => 'amongst',
                27 => 'an',
                28 => 'and',
                29 => 'another',
                30 => 'any',
                31 => 'anybody',
                32 => 'anyhow',
                33 => 'anyone',
                34 => 'anything',
                35 => 'anyway',
                36 => 'anyways',
                37 => 'anywhere',
                38 => 'apart',
                39 => 'appear',
                40 => 'appreciate',
                41 => 'appropriate',
                42 => 'are',
                43 => 'aren\'t',
                44 => 'around',
                45 => 'as',
                46 => 'aside',
                47 => 'ask',
                48 => 'asking',
                49 => 'associated',
                50 => 'at',
                51 => 'available',
                52 => 'away',
                53 => 'awfully',
                54 => 'be',
                55 => 'became',
                56 => 'because',
                57 => 'become',
                58 => 'becomes',
                59 => 'becoming',
                60 => 'been',
                61 => 'before',
                62 => 'beforehand',
                63 => 'behind',
                64 => 'being',
                65 => 'believe',
                66 => 'below',
                67 => 'beside',
                68 => 'besides',
                69 => 'best',
                70 => 'better',
                71 => 'between',
                72 => 'beyond',
                73 => 'both',
                74 => 'brief',
                75 => 'but',
                76 => 'by',
                77 => 'c\'mon',
                78 => 'c\'s',
                79 => 'came',
                80 => 'can',
                81 => 'can\'t',
                82 => 'cannot',
                83 => 'cant',
                84 => 'cause',
                85 => 'causes',
                86 => 'certain',
                87 => 'certainly',
                88 => 'changes',
                89 => 'clearly',
                90 => 'co',
                91 => 'com',
                92 => 'come',
                93 => 'comes',
                94 => 'concerning',
                95 => 'consequently',
                96 => 'consider',
                97 => 'considering',
                98 => 'contain',
                99 => 'containing',
                100 => 'contains',
                101 => 'corresponding',
                102 => 'could',
                103 => 'couldn\'t',
                104 => 'course',
                105 => 'currently',
                106 => 'definitely',
                107 => 'described',
                108 => 'despite',
                109 => 'did',
                110 => 'didn\'t',
                111 => 'different',
                112 => 'do',
                113 => 'does',
                114 => 'doesn\'t',
                115 => 'doing',
                116 => 'don\'t',
                117 => 'done',
                118 => 'down',
                119 => 'downwards',
                120 => 'during',
                121 => 'each',
                122 => 'edu',
                123 => 'eg',
                124 => 'eight',
                125 => 'either',
                126 => 'else',
                127 => 'elsewhere',
                128 => 'enough',
                129 => 'entirely',
                130 => 'especially',
                131 => 'et',
                132 => 'etc',
                133 => 'even',
                134 => 'ever',
                135 => 'every',
                136 => 'everybody',
                137 => 'everyone',
                138 => 'everything',
                139 => 'everywhere',
                140 => 'ex',
                141 => 'exactly',
                142 => 'example',
                143 => 'except',
                144 => 'far',
                145 => 'few',
                146 => 'fifth',
                147 => 'first',
                148 => 'five',
                149 => 'followed',
                150 => 'following',
                151 => 'follows',
                152 => 'for',
                153 => 'former',
                154 => 'formerly',
                155 => 'forth',
                156 => 'four',
                157 => 'from',
                158 => 'further',
                159 => 'furthermore',
                160 => 'get',
                161 => 'gets',
                162 => 'getting',
                163 => 'given',
                164 => 'gives',
                165 => 'go',
                166 => 'goes',
                167 => 'going',
                168 => 'gone',
                169 => 'got',
                170 => 'gotten',
                171 => 'greetings',
                172 => 'had',
                173 => 'hadn\'t',
                174 => 'happens',
                175 => 'hardly',
                176 => 'has',
                177 => 'hasn\'t',
                178 => 'have',
                179 => 'haven\'t',
                180 => 'having',
                181 => 'he',
                182 => 'he\'s',
                183 => 'hello',
                184 => 'help',
                185 => 'hence',
                186 => 'her',
                187 => 'here',
                188 => 'here\'s',
                189 => 'hereafter',
                190 => 'hereby',
                191 => 'herein',
                192 => 'hereupon',
                193 => 'hers',
                194 => 'herself',
                195 => 'hi',
                196 => 'him',
                197 => 'himself',
                198 => 'his',
                199 => 'hither',
                200 => 'hopefully',
                201 => 'how',
                202 => 'howbeit',
                203 => 'however',
                204 => 'i\'d',
                205 => 'i\'ll',
                206 => 'i\'m',
                207 => 'i\'ve',
                208 => 'ie',
                209 => 'if',
                210 => 'ignored',
                211 => 'immediate',
                212 => 'in',
                213 => 'inasmuch',
                214 => 'inc',
                215 => 'indeed',
                216 => 'indicate',
                217 => 'indicated',
                218 => 'indicates',
                219 => 'inner',
                220 => 'insofar',
                221 => 'instead',
                222 => 'into',
                223 => 'inward',
                224 => 'is',
                225 => 'isn\'t',
                226 => 'it',
                227 => 'it\'d',
                228 => 'it\'ll',
                229 => 'it\'s',
                230 => 'its',
                231 => 'itself',
                232 => 'just',
                233 => 'keep',
                234 => 'keeps',
                235 => 'kept',
                236 => 'know',
                237 => 'known',
                238 => 'knows',
                239 => 'last',
                240 => 'lately',
                241 => 'later',
                242 => 'latter',
                243 => 'latterly',
                244 => 'least',
                245 => 'less',
                246 => 'lest',
                247 => 'let',
                248 => 'let\'s',
                249 => 'like',
                250 => 'liked',
                251 => 'likely',
                252 => 'little',
                253 => 'look',
                254 => 'looking',
                255 => 'looks',
                256 => 'ltd',
                257 => 'mainly',
                258 => 'many',
                259 => 'may',
                260 => 'maybe',
                261 => 'me',
                262 => 'mean',
                263 => 'meanwhile',
                264 => 'merely',
                265 => 'might',
                266 => 'more',
                267 => 'moreover',
                268 => 'most',
                269 => 'mostly',
                270 => 'much',
                271 => 'must',
                272 => 'my',
                273 => 'myself',
                274 => 'name',
                275 => 'namely',
                276 => 'nd',
                277 => 'near',
                278 => 'nearly',
                279 => 'necessary',
                280 => 'need',
                281 => 'needs',
                282 => 'neither',
                283 => 'never',
                284 => 'nevertheless',
                285 => 'new',
                286 => 'next',
                287 => 'nine',
                288 => 'no',
                289 => 'nobody',
                290 => 'non',
                291 => 'none',
                292 => 'noone',
                293 => 'nor',
                294 => 'normally',
                295 => 'not',
                296 => 'nothing',
                297 => 'novel',
                298 => 'now',
                299 => 'nowhere',
                300 => 'obviously',
                301 => 'of',
                302 => 'off',
                303 => 'often',
                304 => 'oh',
                305 => 'ok',
                306 => 'okay',
                307 => 'old',
                308 => 'on',
                309 => 'once',
                310 => 'one',
                311 => 'ones',
                312 => 'only',
                313 => 'onto',
                314 => 'or',
                315 => 'other',
                316 => 'others',
                317 => 'otherwise',
                318 => 'ought',
                319 => 'our',
                320 => 'ours',
                321 => 'ourselves',
                322 => 'out',
                323 => 'outside',
                324 => 'over',
                325 => 'overall',
                326 => 'own',
                327 => 'particular',
                328 => 'particularly',
                329 => 'per',
                330 => 'perhaps',
                331 => 'placed',
                332 => 'please',
                333 => 'plus',
                334 => 'possible',
                335 => 'presumably',
                336 => 'probably',
                337 => 'provides',
                338 => 'que',
                339 => 'quite',
                340 => 'qv',
                341 => 'rather',
                342 => 'rd',
                343 => 're',
                344 => 'really',
                345 => 'reasonably',
                346 => 'regarding',
                347 => 'regardless',
                348 => 'regards',
                349 => 'relatively',
                350 => 'respectively',
                351 => 'right',
                352 => 'said',
                353 => 'same',
                354 => 'saw',
                355 => 'say',
                356 => 'saying',
                357 => 'says',
                358 => 'second',
                359 => 'secondly',
                360 => 'see',
                361 => 'seeing',
                362 => 'seem',
                363 => 'seemed',
                364 => 'seeming',
                365 => 'seems',
                366 => 'seen',
                367 => 'self',
                368 => 'selves',
                369 => 'sensible',
                370 => 'sent',
                371 => 'serious',
                372 => 'seriously',
                373 => 'seven',
                374 => 'several',
                375 => 'shall',
                376 => 'she',
                377 => 'should',
                378 => 'shouldn\'t',
                379 => 'since',
                380 => 'six',
                381 => 'so',
                382 => 'some',
                383 => 'somebody',
                384 => 'somehow',
                385 => 'someone',
                386 => 'something',
                387 => 'sometime',
                388 => 'sometimes',
                389 => 'somewhat',
                390 => 'somewhere',
                391 => 'soon',
                392 => 'sorry',
                393 => 'specified',
                394 => 'specify',
                395 => 'specifying',
                396 => 'still',
                397 => 'sub',
                398 => 'such',
                399 => 'sup',
                400 => 'sure',
                401 => 't\'s',
                402 => 'take',
                403 => 'taken',
                404 => 'tell',
                405 => 'tends',
                406 => 'th',
                407 => 'than',
                408 => 'thank',
                409 => 'thanks',
                410 => 'thanx',
                411 => 'that',
                412 => 'that\'s',
                413 => 'thats',
                414 => 'the',
                415 => 'their',
                416 => 'theirs',
                417 => 'them',
                418 => 'themselves',
                419 => 'then',
                420 => 'thence',
                421 => 'there',
                422 => 'there\'s',
                423 => 'thereafter',
                424 => 'thereby',
                425 => 'therefore',
                426 => 'therein',
                427 => 'theres',
                428 => 'thereupon',
                429 => 'these',
                430 => 'they',
                431 => 'they\'d',
                432 => 'they\'ll',
                433 => 'they\'re',
                434 => 'they\'ve',
                435 => 'think',
                436 => 'third',
                437 => 'this',
                438 => 'thorough',
                439 => 'thoroughly',
                440 => 'those',
                441 => 'though',
                442 => 'three',
                443 => 'through',
                444 => 'throughout',
                445 => 'thru',
                446 => 'thus',
                447 => 'to',
                448 => 'together',
                449 => 'too',
                450 => 'took',
                451 => 'toward',
                452 => 'towards',
                453 => 'tried',
                454 => 'tries',
                455 => 'truly',
                456 => 'try',
                457 => 'trying',
                458 => 'twice',
                459 => 'two',
                460 => 'un',
                461 => 'under',
                462 => 'unfortunately',
                463 => 'unless',
                464 => 'unlikely',
                465 => 'until',
                466 => 'unto',
                467 => 'up',
                468 => 'upon',
                469 => 'us',
                470 => 'use',
                471 => 'used',
                472 => 'useful',
                473 => 'uses',
                474 => 'using',
                475 => 'usually',
                476 => 'value',
                477 => 'various',
                478 => 'very',
                479 => 'via',
                480 => 'viz',
                481 => 'vs',
                482 => 'want',
                483 => 'wants',
                484 => 'was',
                485 => 'wasn\'t',
                486 => 'way',
                487 => 'we',
                488 => 'we\'d',
                489 => 'we\'ll',
                490 => 'we\'re',
                491 => 'we\'ve',
                492 => 'welcome',
                493 => 'well',
                494 => 'went',
                495 => 'were',
                496 => 'weren\'t',
                497 => 'what',
                498 => 'what\'s',
                499 => 'whatever',
                500 => 'when',
                501 => 'whence',
                502 => 'whenever',
                503 => 'where',
                504 => 'where\'s',
                505 => 'whereafter',
                506 => 'whereas',
                507 => 'whereby',
                508 => 'wherein',
                509 => 'whereupon',
                510 => 'wherever',
                511 => 'whether',
                512 => 'which',
                513 => 'while',
                514 => 'whither',
                515 => 'who',
                516 => 'who\'s',
                517 => 'whoever',
                518 => 'whole',
                519 => 'whom',
                520 => 'whose',
                521 => 'why',
                522 => 'will',
                523 => 'willing',
                524 => 'wish',
                525 => 'with',
                526 => 'within',
                527 => 'without',
                528 => 'won\'t',
                529 => 'wonder',
                530 => 'would',
                531 => 'wouldn\'t',
                532 => 'yes',
                533 => 'yet',
                534 => 'you',
                535 => 'you\'d',
                536 => 'you\'ll',
                537 => 'you\'re',
                538 => 'you\'ve',
                539 => 'your',
                540 => 'yours',
                541 => 'yourself',
                542 => 'yourselves',
                543 => 'zero',
            ),
            'cache.backend.options' => array(
                'dir' => '/Users/cameron/modules/statistical-classifier-console/cache',
                'file_extension' => '.cache',
            ),
            'cache.path' => '/Users/cameron/modules/statistical-classifier-console/cache',
            'svm.class' => 'SVM',
            'svm.options' => array(
                102 => 0,
            ),
            'svm.kernel_type' => 102,
            'svm.kernel_type.linear' => 0,
            'classifier_namespace' => 'Camspiers\\StatisticalClassifier',
            'tokenizer.word.class' => 'Camspiers\\StatisticalClassifier\\Tokenizer\\Word',
            'normalizer.lowercase.class' => 'Camspiers\\StatisticalClassifier\\Normalizer\\Lowercase',
            'normalizer.porter.class' => 'Camspiers\\StatisticalClassifier\\Normalizer\\Porter',
            'normalizer.stopword.class' => 'Camspiers\\StatisticalClassifier\\Normalizer\\Stopword',
            'normalizer.grouped.class' => 'Camspiers\\StatisticalClassifier\\Normalizer\\Grouped',
            'converter.converter.class' => 'Camspiers\\StatisticalClassifier\\DataSource\\Converter',
            'classifier.complement_naive_bayes.class' => 'Camspiers\\StatisticalClassifier\\Classifier\\ComplementNaiveBayes',
            'classifier.svm.class' => 'Camspiers\\StatisticalClassifier\\Classifier\\SVM',
            'console.application.class' => 'Camspiers\\StatisticalClassifier\\Console\\Application',
            'console.application.name' => 'PHP Classifier',
            'console.application.version' => '~package_version~',
            'console.command.model.remove.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\Model\\RemoveCommand',
            'console.command.model.prepare.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\Model\\PrepareCommand',
            'console.command.train.document.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\Train\\DocumentCommand',
            'console.command.train.directory.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\Train\\DirectoryCommand',
            'console.command.train.pdo.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\Train\\PDOCommand',
            'console.command.classify.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\ClassifyCommand',
            'console.command.test.pdo.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\Test\\PDOCommand',
            'console.command.test.directory.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\Test\\DirectoryCommand',
            'console.command.server.run.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\Server\\RunCommand',
            'console.command.generate_container.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\GenerateContainerCommand',
            'console.command.config.create.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\Config\\CreateCommand',
            'console.command.config.remove.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\Config\\RemoveCommand',
            'console.command.config.open.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\Config\\OpenCommand',
            'console.command.self_update.class' => 'Camspiers\\StatisticalClassifier\\Console\\Command\\SelfUpdateCommand',
            'cache.class' => 'CacheCache\\Cache',
            'cache.backend.class' => 'CacheCache\\Backends\\File',
            'json_pretty.class' => 'Camspiers\\JsonPretty\\JsonPretty',
            'classifier_path' => '/Users/cameron/modules/statistical-classifier-console',
            'run_path' => '/Users/cameron/modules/statistical-classifier-console',
        );
    }
}
